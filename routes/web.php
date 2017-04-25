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
    return view('pages/test');
});


//Route::get('/', function(){return view("pages/test");});
//Route::get('/', function(){return view("event");});


Route::get('/bs', function () {
    return view('firstbootstrap');
});

Route::resource('feedback','FeedbackController');

Route::post('/newsletter','newsletter_controller@storemail');


//::get('/', function(){return view("pages/test");});
Route::get('/media','MediaController@getmedia');

  // Route::get('/{id}', [
  //       'uses' => 'MediaController@getpic',
  //       'as' => 'event'
  //   ]);

Route::get('/media2/{id}','MediaController@getpic');
Auth::routes();

Route::get('/home', 'HomeController@index');
