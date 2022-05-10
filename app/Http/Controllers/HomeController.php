<?php

namespace App\Http\Controllers;

use App\Models\survey;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    public function index(){
        $sliderdata = survey::limit(3)->get();
        $surveys = survey::limit(5)->get();
        return view("home.index",[
            'sliderdata' => $sliderdata,
            'surveys' => $surveys
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
