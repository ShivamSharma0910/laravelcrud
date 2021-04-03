<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']],function(){   
Route::get('dashboard', [DashboardController::class, 'loadview']);
Route::get('adduser', [UserController::class, 'adduser']);
Route::post('adduserd', [UserController::class, 'adduserd']);
Route::get('viewuser', [UserController::class, 'viewuser']);    
Route::get('edituser/{id}', [UserController::class,'showuser']);  
Route::post('edituserd/{id}', [UserController::class,'updateuser']);  
Route::get('delete/{id}',[UserController::class,'destroy']);
Route::get('sendbasicemail',[UserController::class,'basic_email']);
Route::get('sendhtmlemail',[UserController::class,'html_email']);
Route::get('joinsview',[UserController::class,'joins']);
});


Route::get('signup', [AuthController::class, 'signupview']);
Route::post('signupc',[AuthController::class,'create']);
Route::get('login', [AuthController::class, 'loginview'])->name('login');
Route::post('loginpost',[AuthController::class,'loginpost']);
Route::get('logout',[AuthController::class,'logout']);
Route::get('forgotpassword', [AuthController::class, 'forgotpassword']);