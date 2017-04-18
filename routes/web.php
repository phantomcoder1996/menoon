<?php

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
    return view('pages/test',['success'=>'2']);
});



Route::get('/bs', function () {
    return view('firstbootstrap');
});

Route::resource('feedback','FeedbackController');