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

Route::get('/', function () {
    return view('welcome');
});

Route::get('loginpage','IndexController@showStartPage');
Route::get('zara/meinLebenslauf', function () {
    return view('cv_page');
});

Route::get('cvpage','IndexController@showCvPage');
Route::get('cvpage2','IndexController@showCvPage2');
Route::get('contact','IndexController@showContact');
Route::get('experience','IndexController@showExperience');
