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
    //
    return view('pages.home');
})->name('pages.home');

//Route::get('/', function(){return view("pages/test");});
//Route::get('/', function(){return view("event");});


Route::get('/bs', function () {
    return view('firstbootstrap');
});

Route::resource('feedback','FeedbackController');
Route::resource('fingerprints','addFingerprints');
Route::resource('iqtest','iqTest');
Route::post('/newsletter','newsletter_controller@storemail');


//::get('/', function(){return view("pages/test");});a
Route::get('/media','MediaController@getmedia');

  // Route::get('/{id}', [
  //       'uses' => 'MediaController@getpic',
  //       'as' => 'event'
  //   ]);

Route::get('/media2/{id}','MediaController@getpic');
Route::post('admins_logout', 'adminAuth\LoginController@logout');
Route::get('admins_login', 'adminAuth\LoginController@showLoginForm');
Route::post('admins_login', 'adminAuth\LoginController@login');


Route::group(['middleware' => 'admin_auth'], function(){

Route::post('admin_logout', 'adminAuth\LoginController@logout');
Route::get('/admin_home', function(){
  return view('admin.home');
});


Route::get('/forget-password','ForgetPasswordController@forgotpassword');
Route::post('/forget-password','ForgetPasswordController@postForgotPassword');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('contact','contactController@insertMessage');

Route::get('/Events', [
    'uses' => 'eventController@getEvents',
    'as' => 'pages.events'

]);
Route::post('Filter','eventController@filterEvents');

Route::get('/Events/View/{id}', [
    'uses' => 'eventController@getEvent',
    'as' => 'pages.Events.View.index'

]);
Route::get('/deleteUser/{id}',['uses'=>'deleteUser@deleteUser']);


Route::get('Events/view', function () {
    return view('pages.Events.View.index');
});


Route::get('/#About', function () {
    //
    return view('pages.home/#About');
})->name('home.about');

Route::get('/#Contact', function () {
    //
    return view('pages.home/#Contact');
})->name('home.contact');

Route::get('/#Media', function () {
    //
    return view('pages.home/#Media');
})->name('home.media');



Route::group(["middleware"=>"auth"],function()
{
  Route::get('/fullAccess',function(){
    return view('pages/Admin/fullAccessAdmin');
  });
});

Route::get('/addFingerPrint',function(){return view('pages/Admin/uploadFingerPrints');});


Route::get('/Profile', function () {
    //
    return view('pages.updateInfo');
})->name('home.Profile');

Route::get('/CreateEvent', function () {
    //
    return view('pages.eventAdmin');
});
Route::post('createEvent','createEventController@createEvent');

Route::resource('approvalAdmin','approval_admin_controller');

Route::post('/createAdmin',['uses'=>'createAdmin@store']);

Route::get('/eventNames',['uses'=>'createAdmin@getEventNames']);

Route::get('/createAdminView',function(){return view('pages.Admin.createAdmin');});