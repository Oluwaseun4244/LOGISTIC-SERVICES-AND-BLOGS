<?php

use App\Http\Controllers\Mycontroller;
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



Route::match(["GET", "POST"], '/', [Mycontroller::class, "home"]);
Route::match(["GET", "POST"], '/home', [Mycontroller::class, "home"]);
Route::match(["GET", "POST"], '/signup', [Mycontroller::class, "signup"]);
Route::match(["GET", "POST"], '/about', [Mycontroller::class, "about"]);
Route::match(["GET", "POST"], '/bloglist', [Mycontroller::class, "bloglist"]);
Route::match(["GET", "POST"], "/blogdetails/{id}", [Mycontroller::class, "blogdetails"]);
Route::match(["GET", "POST"], '/quote', [Mycontroller::class, "getquote"]);
Route::match(["GET", "POST"], '/contact', [Mycontroller::class, "contact"]);
Route::match(["POST", "GET"], "/adminlogin", [Mycontroller::class, "adminlogin"]);
Route::match(["POST", "GET"], "/signup", [Mycontroller::class, "signUp"]);
Route::match(["POST", "GET"], "/placed", [Mycontroller::class, "placed"])->name("placed");
Route::match(["POST", "GET"], "/track", [Mycontroller::class, "track"]);
Route::match(["POST", "GET"], "/tracked", [Mycontroller::class, "tracked"])->name("tracked");
Route::match(["POST", "GET"], "/signout", [Mycontroller::class, "signout"]);
Route::match(["POST", "GET"], "/placeorder/{name}/{freight}/{email}/{phone}/{pickup}/{dropoff}/{weight}/{distance}", [Mycontroller::class, "placeorder"]);

Route::group(["middleware" => "adminMiddleWare"], function(){

    Route::match(["POST", "GET"], "/blogs", [Mycontroller::class, "blogs"]);
    Route::match(["POST", "GET"], "/admindashboard", [Mycontroller::class, "admindashboard"]);
    Route::match(["POST", "GET"], "/calculator", [Mycontroller::class, "calculator"]);
    Route::match(["POST", "GET"], "/calcedit/{id}", [Mycontroller::class, "editcalculator"]);
    Route::match(["POST", "GET"], "/blogedit/{id}", [Mycontroller::class, "blogedit"]);
    Route::match(["POST", "GET"], "/addblog", [Mycontroller::class, "addblog"]);
    Route::match(["POST", "GET"], "/blogdelete/{id}", [Mycontroller::class, "blogdelete"]);
    Route::match(["POST", "GET"], "/orderview/{id}", [Mycontroller::class, "orderview"]);
    Route::match(["POST", "GET"], "/settings", [Mycontroller::class, "settings"]);
    Route::match(["POST", "GET"], "/settingsedit/{id}", [Mycontroller::class, "settingsedit"]);
    Route::match(["POST", "GET"], "/orders", [Mycontroller::class, "orders"]);
    
});
