<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use App\Models\survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // 
    public function index(){
        $sliderdata = survey::limit(3)->get();
        $surveys = survey::limit(5)->get();
        $setting = Setting::first();
        return view("home.index",[
            'sliderdata' => $sliderdata,
            'surveys' => $surveys,
            'setting' => $setting
        ]);
    }

    public static function mainCategoryList(){
        return Category::where('parent_id', '=' , 0)->with('children')->get();
    }

    public function categorysurveys($id){
        $category = Category::find($id);
        $surveys = DB::table('surveys')->where('category_id',$id)->get();
        return view('home.categorysurveys',[
            'category' => $category,
            'surveys' => $surveys
        ]);
    }

    public function about(){
        $setting = Setting::first();
        return view('home.about',[
            'setting' => $setting
        ]);
    }

    public function contact(){
        $setting = Setting::first();
        return view('home.contact',[
            'setting' => $setting
        ]);
    }

    public function references(){
        $setting = Setting::first();
        return view('home.references',[
            'setting' => $setting
        ]);
    }

    public function storemessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('success','Your message has been sent, Thank you.');
    }

    public function faq(){
        $datalist = Faq::all();
        $setting = Setting::first();

        return view('home.faq',[
            'datalist' => $datalist,
            'setting' => $setting
        ]);
    }

    public function storecomment(Request $request){
        $data = new Comment();

        $data->user_id = Auth::id();
        $data->survey_id = $request->input('survey_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->IP = $request->ip();
        $data->save();

        return redirect()->route('survey',['id' => $request->input('survey_id')])->with('success','Your comment has been sent, Thank you.');
    }

    public function test(){
        return view("home.test");
    }

    public function survey($id){
        $data = survey::find($id);
        $reviews = Comment::where('survey_id',$id)->where('status','True')->get(); 
        return view("home.survey",[
            'data' => $data,
            'reviews' => $reviews
        ]);
    }

    public function parameter($id,$number){
        echo "Parameter 1: ".$id;
        echo "<br> Parameter 2: ".$number;
        echo "<br> Sum: ".($id+$number);
        return view('home.test2',[
            'id' => $id,
            'number' => $number
        ]);
    }

    public function save(){
        echo "Save Function<br>";
        echo "First name: ".$_REQUEST["fname"];
    }
}
