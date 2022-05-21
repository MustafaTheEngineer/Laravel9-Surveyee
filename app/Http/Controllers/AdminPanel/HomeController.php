<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use SebastianBergmann\Type\TypeName;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function setting(){
        $data = Setting::first();
        if($data === null){
            $data = new Setting();
            $data->title = 'Surveyee';
            $data->save();
            $data = Setting::first();
        }

        return view('admin.setting',['data' => $data]);
    }

    public function settingUpdate(Request $request){
        // $id = $request->input('id'); Doesn't work 

        $data = Setting::find(2);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->youtbue = $request->input('youtbue');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        if($request->file('icon')){
            $data->icon = $request->file('icon')->store('images');
        }
        $data->save();

        return redirect()->route('admin.setting');
    }
}

?>
