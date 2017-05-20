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

Route::get('/home1', function(){
  return view('home');
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

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'Auth\RegisterController@confirm'
]);

Route::get('/media2/{id}','MediaController@getpic');

Route::post('admins_logout', 'adminAuth\LoginControllr@logout');
Route::get('admins_login', 'adminAuth\LoginControllr@showLoginForm');
Route::post('admins_login', 'adminAuth\LoginControllr@login');


Route::group(['middleware' => 'admin_guest'], function() {


Route::get('admins_login', 'adminAuth\LoginControllr@showLoginForm');
Route::post('admins_login', 'adminAuth\LoginControllr@login');
//Password reset routes
Route::get('admins_password/reset', 'adminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admins_password/email', 'adminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admins_password/reset/{token}', 'adminAuth\ResetPasswordController@showResetForm');
Route::post('admins_password/reset', 'adminAuth\ResetPasswordController@reset');
});
//auth
Route::group(['middleware' => 'auth'], function() {

  
    });






Route::group(['middleware' => 'admin_auth'], function() {


Route::post('admins_logout', 'adminAuth\LoginControllr@logout');
Route::get('/admins_home', function(){
  return view('admin.home');

   

});
Route::get('/mediauploader','PhotoUploadController@getview');
Route::get('/mediauploader/{id}',[
    'uses' => 'PhotoUploadController@getPhotosEvent',
    'as' => 'mediaAdmin.insert'

]);

Route::post('/mediauploader/{id}',[
    'uses' => 'PhotoUploadController@uploadPhotosEvent',
    'as' => 'mediaAdmin.insert'

]);

Route::get('/mediauploader1/{id}',[
    'uses' => 'PhotoUploadController@deletePhotosEvent',
    'as' => 'mediaAdmin.delete'

]);

Route::get('/tags',[
    'uses' => 'ApproveTagsController@getview',
    'as' => 'tagAdmin.view'

]);

Route::get('/tags1',[
    'uses' => 'ApproveTagsController@getviewappdis',
    'as' => 'tagAdmin.appdis'

]);

Route::get('/tagsa',[
    'uses' => 'ApproveTagsController@getviewremove',
    'as' => 'tagAdmin.remove'

]);

Route::get('/tagr1/{id}',[
    'uses' => 'ApproveTagsController@removetag',
    'as' => 'tagAdmin.removetag'

]);

Route::get('/tagapp1/{id}',[
    'uses' => 'ApproveTagsController@approve',
    'as' => 'tagAdmin.app'

]);

Route::get('/tagdisapp1/{id}',[
    'uses' => 'ApproveTagsController@disapprove',
    'as' => 'tagAdmin.disapp'

]);
Route::get('/addFingerPrint',function(){return view('pages/Admin/uploadFingerPrints');});
Route::post('/createAdmin',['uses'=>'createAdmin@store']);
Route::get('/createAdminView',function(){return view('pages.Admin.createAdmin');});
Route::resource('approvalAdmin','approval_admin_controller');
Route::get('/fullAccess',function(){
    return view('pages/Admin/fullAccessAdmin');
  });

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
  
});




Route::get('/Profile','profileController@events')->name("home.Profile");




Route::get('/CreateEvent', function () {
    //
    return view('pages.eventAdmin');
});
Route::post('createEvent','createEventController@createEvent');





Route::get('/gallery',[
    'uses' => 'MediaController@getgallery',
    'as' => 'pages.gallery'

]);
Route::get('/gallery/{id}',[
    'uses' => 'MediaController@galleryview',
    'as' => 'pages.galleryview'

]);

Route::get('/tagging/{id}',[
    'uses' => 'MediaController@gettagged',
    'as' => 'pages.gallerytag'

]);
Route::get('/mymedia',[
    'uses' => 'MediaController@getmymedia',
    'as' => 'pages.mygalleryview'

]);

Route::get('/Admin','adminController@viewEvents')->name("pages.viewEvents");





Route::get('/eventNames',['uses'=>'createAdmin@getEventNames']);




Route::post('/viewApp',['uses'=>'adminController@viewApp'])->name('pages.viewApp');

Route::get('addmoney/stripe', array('as' => 'pages.paywithstripe','uses' => 'AddMoneyController@payWithStripe',))->name('pages.paywithstripe');
Route::post('addmoney/stripe', array('as' => 'pages.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));
Route::post('updateProfile','profileController@profile')->name("pages.updateInfo");
Route::post('updateAccount','profileController@account')->name("pages.updateAccount");
Route::post('Update_Account','profileController@account2')->name("pages.Update_Account");
Route::post('updateEmail','profileController@email')->name("pages.updateEmail");
Route::post('requestCertificate','profileController@certificate')->name("pages.certificate");
Route::post('updatePic','profileController@profilePic')->name("pages.updatePic");


  Route::get('/Profile', function () {

    return view('pages.updateInfo');
})->name('home.Profile');


