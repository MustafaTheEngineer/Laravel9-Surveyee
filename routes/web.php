<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\HomeController;
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

//3- Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

//4- Route->Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/parameter/{id}/{number}',[HomeController::class,'parameter'])->name('parameter');

// Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('admin')->group(function(){
    // ************************ ADMIN PANEL ROUTES ************************
    Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('admin');
    // ************************ ADMIN CATEGORY ROUTES ************************
    Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
    Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin_category_edit');
    Route::get('/admin/category/destroy/{id}',[CategoryController::class,'destroy'])->name('admin_category_destroy');
    Route::get('/admin/category/show/{id}',[CategoryController::class,'show'])->name('admin_category_show');
});



?>