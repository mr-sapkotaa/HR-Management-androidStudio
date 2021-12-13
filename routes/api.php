<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\leavecontroller;
use App\Http\Controllers\calendercontroller;
use App\Http\Controllers\messegescontroller;
use App\Http\Controllers\noticescontroller;
use App\Http\Controllers\reportcontroller;

Route::group(['middleware' => 'auth:sanctum'], function(){
    //you can add your secure urls here.
    route::get('getdashboard',[\App\Http\Controllers\DashboardController::class,'getdashboard']);
       

route::get('getleavedata',[\App\Http\Controllers\leavecontroller::class,'getalldata']);
route::get('getmesseges',[\App\Http\Controllers\messegesController::class,'getallmesseges']);
    route::get('getnotices',[\App\Http\Controllers\noticesController::class,'getallnotices']);
    route::get('getreport',[\App\Http\Controllers\reportController::class,'getallreport']);
    route::get('getcalender',[\App\Http\Controllers\calenderController::class,'getcalender']);
 

Route::post("login",[UserController::class,'login']);
Route::post('register',[UserController::class,'register']);
Route::post('verifyotp',[\App\Http\Controllers\UserController::class,'verifyotp']);
Route::post('dashboard',[\App\Http\Controllers\DashboardController::class,'store']);

Route::post('leave',[\App\Http\Controllers\leavecontroller::class,'store']);
Route::post('calender',[\App\Http\Controllers\calendercontroller::class,'calender']);
Route::post('messeges',[\App\Http\Controllers\messegescontroller::class,'store']);
Route::post('notices',[\App\Http\Controllers\noticescontroller::class,'store']);
Route::post('report',[\App\Http\Controllers\reportcontroller::class,'store']);


    });
    

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
