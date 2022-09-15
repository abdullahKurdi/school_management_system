<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Teacher" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['auth' , 'roles' , 'role:teacher' , 'active','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] , 'prefix'=>LaravelLocalization::setLocale().'/teacher' , 'as'=>'teacher'], function (){
    Route::get('dashboard', function () {return view('teacher.dashboard');})->name('index');
});
