<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\survey;
use App\Models\Category;
use Illuminate\Http\Request;
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
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(survey $survey,$id)
    {
        $data = Survey::find($id);
        return view('admin.survey.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(survey $survey,$id)
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
        //
    }
}
