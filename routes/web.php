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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Frontend')->group(function (){
    Route::get('/','HomeController@index')->name('user.home')->middleware('auth:web');
    Route::get('history','HomeController@history')->name('user.history')->middleware('auth:web');
    Route::get('/about','HomeController@about')->name('user.about')->middleware('auth:web');
    Route::get('/faq','HomeController@faq')->name('user.faq')->middleware('auth:web');
    Route::get('/contact','HomeController@contact')->name('user.contact')->middleware('auth:web');
    Route::post('/contact/message','HomeController@contactSend')->name('user.contact.send')->middleware('auth:web');
    Route::post('/newslatter','HomeController@newslatter')->name('newslatter')->middleware('auth:web');
    Route::get('/otp/verification','HomeController@otpVerification')->name('user.otp')->middleware('auth:web');
    Route::get('/send/otp','AjaxController@sendOtp')->name('send.otp');
    Route::get('/document/verification','HomeController@documentVerification')->name('user.document.verification');
    Route::post('/document/store','HomeController@documentStore')->name('user.document.store');
    Route::get('/otp/verify/{otp}','AjaxController@verify')->name('otp.verify');

//    Route::post('user-validation','HomeController@validUser')->name('user.valid');
//    Route::post('attempt-register-validation','HomeController@attemptRegisterValidation')->name('user.attempt.register');
});













//Admin Route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/','HomeController@index')->name('admin.mainpage')->middleware('auth:admin');
    Route::get('/home', 'HomeController@index')->name('admin.home')->middleware('auth:admin');

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('/clear-cache', function () {
        \Artisan::call('view:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('route:clear');
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        alert()->success('Success','Cache Clear Successful');
//        return redirect()->route('admin.home');
    });
});

