<?php

use App\Http\Controllers\AdminPanel\AdminSurveyController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 1- Write in route
Route::get('/hello',function(){
    return "Hello World";
});

//2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// ************************ HOME PAGE ROUTES ************************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');

//4- Route->Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/parameter/{id}/{number}',[HomeController::class,'parameter'])->name('parameter');

// Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/survey/{id}',[HomeController::class,'survey'])->name('survey');
Route::get('/categorysurveys/{id}/{slug}',[HomeController::class,'categorysurveys'])->name('categorysurveys');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************************ ADMIN PANEL ROUTES ************************
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[AdminPanelHomeController::class,'index'])->name('index');
// ************************ GENERAL ROUTES ************************
    Route::get('/setting',[AdminPanelHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminPanelHomeController::class,'settingUpdate'])->name('setting.update');
    
// ************************ ADMIN CATEGORY ROUTES ************************
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    Route::prefix('/survey')->name('survey.')->controller(AdminSurveyController::class)->group(function(){
        // ************************ ADMIN SURVEY ROUTES ************************
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // ************************ ADMIN SURVEY IMAGE GALLERY ROUTES ************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function(){
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });

    // ************************ ADMIN MESSAGES ROUTES ************************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
    
});

?>