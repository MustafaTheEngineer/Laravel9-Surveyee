<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Comment;
use App\Models\Question;
use App\Models\survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
