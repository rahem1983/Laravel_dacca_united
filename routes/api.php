<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::post('login', [UserController::class, "login"]);

//     });
Route::get('seed', [UserController::class, "seed"]);
Route::post('login', [UserController::class, "login"]);
Route::view('login','login');
Route::get('index', [UserController::class, "homepage"]);
Route::get('logout', function(){
    if (session()->has('username')) {

        session()->pull('username');
    }
    return redirect('/index');
});
Route::post('signup', [UserController::class, "signup"]);
Route::view('signup','Signup_page');
Route::view('signup_form','Signup_form');

