<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Parent Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Parent" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['auth' , 'roles' , 'role:parent' , 'active','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] , 'prefix'=>LaravelLocalization::setLocale().'/parent' , 'as'=>'parent'], function (){
    Route::get('dashboard', function () {return view('parent.dashboard')->name('index');});
});
