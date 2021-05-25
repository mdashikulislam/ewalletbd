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
//Route::get('/home', 'HomeController@index')->name('home');
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
    Route::post('convert','HomeController@convert')->name('convert');
//    Route::get('/convert/{from}/{to}/{value}','HomeController@convert')->name('user.convert');
    Route::get('/exchange-rate/{from}/{to}/{value}','AjaxController@exchange')->name('user.exchange');

    Route::get('currency/info/{from}/{to}','AjaxController@currencyInfo')->name('currency.info');
    Route::get('currency/dropdown/{from}','AjaxController@dropdown')->name('currency.dropdown');

    Route::post('tnx/convert/input','HomeController@is_convert_input')->name('tnx.convert.input')->middleware('auth:web');

//    Route::post('user-validation','HomeController@validUser')->name('user.valid');
//    Route::post('attempt-register-validation','HomeController@attemptRegisterValidation')->name('user.attempt.register');
});





Route::get('/test',function (){
    return bcrypt('12345678');
});







//Admin Route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/','HomeController@index')->name('admin.mainpage')->middleware('auth:admin');
    Route::get('/home', 'HomeController@index')->name('admin.home')->middleware('auth:admin');

    Route::get('all/exchange', 'HomeController@all_exchange_show')->name('admin.exchange.show')->middleware('auth:admin');
    Route::get('all/exchange/{id}', 'HomeController@all_exchange_change')->name('change.status.exchange')->middleware('auth:admin');
    Route::post('all/exchange/update/post/{id}', 'HomeController@all_exchange_change_post')->name('post.status.change')->middleware('auth:admin');

    Route::get('currency/exchange/rate', 'HomeController@currency_exchange_show')->name('currency.exchange.show')->middleware('auth:admin');
    Route::get('currency/exchange/rate/{id}', 'HomeController@currency_exchange_edit')->name('currency.exchange.edit')->middleware('auth:admin');
    Route::post('update/currency/exchange/rate/{id}', 'HomeController@currency_exchange_update')->name('currency.exchange.update')->middleware('auth:admin');

    Route::get('reserve/exchange/rate', 'HomeController@reserve_exchange_show')->name('reserve.exchange.show')->middleware('auth:admin');
    Route::get('reserve/exchange/rate/{id}', 'HomeController@reserve_exchange_edit')->name('reserve.exchange.edit')->middleware('auth:admin');
    Route::post('update/reserve/exchange/rate/{id}', 'HomeController@reserve_exchange_update')->name('reserve.exchange.update')->middleware('auth:admin');


    Route::get('notice/show', 'HomeController@notice_show')->name('notice.show')->middleware('auth:admin');
    Route::get('notice/edit/{id}', 'HomeController@notice_edit')->name('notice.edit')->middleware('auth:admin');
    Route::post('update/notice/{id}', 'HomeController@notice_update')->name('notice.update')->middleware('auth:admin');



    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('/clear-cache', function () {
        \Artisan::call('view:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('route:clear');
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        alert()->success('Success','Cache Clear Successful');
        return redirect()->route('user.home');
    });
});

