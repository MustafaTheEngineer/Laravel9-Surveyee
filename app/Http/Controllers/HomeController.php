<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\survey;
use Illuminate\Http\Request;
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

    public function test(){
        return view("home.test");
    }

    public function survey($id){
        $data = survey::find($id);
        return view("home.survey",[
            'data' => $data
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
