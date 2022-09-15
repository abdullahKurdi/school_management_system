<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolePermissionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['auth' , 'roles' , 'role:admin|supervisor' , 'active','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] , 'prefix'=>LaravelLocalization::setLocale().'/admin' , 'as'=>'admin.'], function (){

    Route::get('/'           , [AdminController::class , 'index'])->name('index');
    Route::get('/dashboard'  , [AdminController::class , 'index'])->name('index');

    Route::resource('roles_permissions'                         ,RolePermissionController::class);
    Route::resource('users'                                     ,UserController::class );


});

