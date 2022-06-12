<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Question;
use App\Models\survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

    public function reviews()
    {
        $comments = Comment::where('user_id', '=' , Auth::id())->get();

        return view('home.user.comments', [
            'comments' => $comments
        ]);
    }

    public function fillsurvey($id)
    {
        $question = Question::where('survey_id', '=' , $id)->get();

        return view('home.user.fillsurvey', [
            'question' => $question,
            'count' => 0,
        ]);
    }

    public function storeattendance(Request $request)
    {
        $joinHistory = Attendance::where([
            ['user_id','=',Auth::id()],
            ['question_id','=',$request->question_id],
        ])->get();

        if (!isset($joinHistory[0])) {
            $data = new Attendance();
            $data->user_id = Auth::id();
            $data->survey_id = $request->survey_id;
            $data->question_id = $request->question_id;
            $data->answer_id = $request->answer;
            $data->save();
        }else{
            $this->updateattendance($joinHistory[0],$request->answer);
        }

        $question = Question::where('survey_id','=',$request->survey_id)->get();
        if(isset($question[$request->count + 1])){
            return view('home.user.fillsurvey',[
                'id' => $request->survey_id,
                'question' => $question,
                'count' => ($request->count + 1)
            ]);
        }
        else{
            $question[0]->survey->complete_number += 1;
            $question[0]->survey->save();
            return redirect()->route('survey',['id' => $request->survey_id])->with('success','You completed the survey! thank you.');
        }
    }

    public static function updateattendance(Attendance $request,$answer)
    {
        $data = Attendance::find($request->id);
        $data->answer_id = $answer;
        $data->save();
    }

    public function filledsurveys()
    {
        $attendance = DB::table('attendances')->where('user_id','=',Auth::id())->get('survey_id')->pluck('survey_id');
        $filledSurveys = survey::whereIn('id' , $attendance)->get();
        return view('home.user.filledsurveys',['filledSurveys' => $filledSurveys]);
    }
    

    public function createdsurveys()
    {
        $data = survey::where('user_id','=',Auth::id())->get();

        return view('home.user.createdsurveys',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdestroy($id)
    {
        $data = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
        //
    }

    public function statistics($id)
    {
        $attendances = Attendance::where('survey_id','=',$id);
        $questions = $attendances->distinct('question_id');
        $questionsID = $questions->get('question_id')->pluck('question_id');
        $questionClass = Question::where('survey_id','=',$id)->get();
        $data = array();

        foreach ($questionsID as $item) {
            $answerNumbers = [];
            $control = Attendance::where('question_id','=',$item)->get()[0]->question;
            if($control->option1)
                array_push($answerNumbers,Attendance::where('question_id','=',$item)->where('answer_id','=',1)->count('answer_id'));
            else
                array_push($answerNumbers,-1);
            if($control->option2)
                array_push($answerNumbers,Attendance::where('question_id','=',$item)->where('answer_id','=',2)->count('answer_id'));
            else
                array_push($answerNumbers,-1);
            if($control->option3)
                array_push($answerNumbers,Attendance::where('question_id','=',$item)->where('answer_id','=',3)->count('answer_id'));
            else
                array_push($answerNumbers,-1);

            if($control->option4)
                array_push($answerNumbers,Attendance::where('question_id','=',$item)->where('answer_id','=',4)->count('answer_id'));
            else
                array_push($answerNumbers,-1);
            if($control->option5)
                array_push($answerNumbers,Attendance::where('question_id','=',$item)->where('answer_id','=',5)->count('answer_id'));
            else
                array_push($answerNumbers,-1);


            array_push($data,$answerNumbers);
        }

        /*$count = array_count_values($data[1]);
        echo "<pre>";
        echo print_r($count['0']).'<br>';
        echo "</pre>";
        exit();*/
        return view('home.user.statistics',[
            'questionClass' => $questionClass,
            'data' => $data
        ]);
    }

    public function createsurvey()
    {
        $data = Category::all();
        return view('home.user.createsurvey',[
            'data' => $data
        ]);
    }

    public function storesurvey(Request $request)
    {
        $data = new survey();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->detail = $request->detail;
        $data->complete_number = 0;
        $data->likes = 0;
        $data->status = $request->status;
        $data->save();
        return redirect(route('userpanel.addquestion',['id' => $data->id]));
    }

    public function editsurvey($id)
    {
        $data = Survey::find($id);
        $datalist = Category::all();
        return view('home.user.editsurvey',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    public function updatesurvey(Request $request, $id)
    {
        $data = Survey::find($id);
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->detail = $request->detail;
        $data->complete_number = 0;
        $data->likes = 0;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('userpanel.showsurvey',['id' => $id]);
    }

    public function showsurvey($id)
    {
        $data = Survey::find($id);
        return view('home.user.showsurvey',[
            'data' => $data
        ]);
    }

    public function destroysurvey($id)
    {
        $data = Survey::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('userpanel.createdsurveys'));
    }

    public function addquestion($id)
    {
        $data = survey::find($id);
        return view('home.user.addquestion',[
            'data' => $data,
            'surveyID' => $id
        ]);
    }

    public function storequestion(Request $request)
    {
        $data = new Question();
        $data->survey_id = $request->survey_id;
        $data->question = $request->question;
        $data->option1 = $request->option1;
        $data->option2 = $request->option2;
        $data->option3 = $request->option3;
        $data->option4 = $request->option4;
        $data->option5 = $request->option5;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('userpanel.addquestion',['id' => $request->survey_id]);
    }

    public function surveyfillers($id)
    {
        $attendance = DB::table('attendances')->where('survey_id','=',$id)->get('user_id')->pluck('user_id');
        $data = User::whereIn('id' , $attendance)->get();
        return view('home.user.surveyfillers',[
            'data' => $data
        ]);
    }

    public function indeximage($pid)
    {
        $survey = survey::find($pid);
        // $images = Image::where('product_id',$pid);
        $images = DB::table('images')->where('survey_id',$pid)->get();
        return view('admin.image.index',[
            'survey' => $survey,
            'images' => $images
        ]);
    }

    public function storeimage(Request $request,$pid)
    {
        $data = new Image();
        $data->survey_id = $pid;
        $data->title = $request->title;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();

        return redirect()->route('admin.image.index',['pid'=>$pid]);
    }

    public function destroyimage($pid, $id)
    {
        $data = Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index',['pid'=>$pid]);
    }
}
