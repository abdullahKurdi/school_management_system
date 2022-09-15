<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "student" middleware group. Now create something great!
|
*/

//Route::group(['middleware'=>['auth' , 'roles' , 'role:student' , 'active','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] , 'prefix'=>LaravelLocalization::setLocale().'/student' , 'as'=>'student'], function (){
//    Route::get('dashboard', function () {return view('student.dashboard')->name('index');});
//});
Route::group(['middleware'=>['auth' , 'roles' , 'role:student' , 'active','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] , 'prefix'=>LaravelLocalization::setLocale().'/student' , 'as'=>'teacher'], function (){
    Route::get('dashboard', function () {return view('student.dashboard');})->name('index');
});
