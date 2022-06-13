<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\survey;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Survey::all();
        return view('admin.survey.index',[
            'data' => $data
        ]);
    }

    public function myindex()
    {
        $data = Survey::where('user_id','=',Auth::id())->get();
        
        return view('admin.survey.index',[
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
        $data = Category::all();
        return view('admin.survey.create',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect(route('admin.question.create',['id' => $data->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Survey::find($id);
        return view('admin.survey.show',[
            'data' => $data
        ]);
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
        return view('admin.survey.statistics',[
            'questionClass' => $questionClass,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Survey::find($id);
        $datalist = Category::all();
        return view('admin.survey.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, survey $survey, $id)
    {
        $data = Survey::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;
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

        return redirect('admin/survey');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(survey $survey,$id)
    {
        $data = Survey::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/survey');
    }
}
