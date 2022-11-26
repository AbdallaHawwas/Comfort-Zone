<?php

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

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/
Route::get('/t',function(){ return view("user.layouts.userSidenav");});
Route::get("/", [App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::name("general.")->group(function(){
    Route::get("about", function (){ return view("general.about");})->name("about");
    Route::get("contact", function (){ return view("general.contact");})->name("contact");
    Route::get("testmonial", function (){ return view("general.testmonial");})->name("testmonial");
    Route::get("what-we-do", function (){ return view("general.what-we-do");})->name("what-we-do");
    Route::get("login", function (){ return view("general.login");})->name("login");
    Route::get("register", function (){ return view("general.register");})->name("register");
    Route::get("forgetpassword", function (){ return view("general.forgetpass");})->name("forgetpass");
});
/*
|--------------------------------------------------------------------------
| Website Users Routes
|--------------------------------------------------------------------------
*/
Route::name("user.")->controller(UserController::class)->group(function(){
    Route::get("/", 'index')->name("profile");
    Route::get("login", 'login')->name("login");
    Route::get("register", 'create')->name("register");
    Route::get("forgetpassword", 'forget_password')->name("forgetpass");
});
/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::name("admin.")->group(function(){

});