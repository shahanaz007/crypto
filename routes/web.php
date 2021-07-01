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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/payment','PaymentsController');
Route::post('/create_order','PaymentsController@create_order');
Route::get('/check_for_update/{id}','PaymentsController@check_for_update');
Route::get('/check_for_status/{id}','PaymentsController@check_for_status');
Route::get('/convert','PaymentsController@convert');


Route::post('/get_rate_of_currency','PaymentsController@get_rate_of_currency');
Route::get('/deposit/{id}','PaymentsController@deposit');
Route::post('/deposit2','PaymentsController@deposit2');


Route::resource('/withdraw','WithdrawalsController');
Route::post('/get_rate_of','WithdrawalsController@get_rate_of');

Route::resource('/transfer','TransfersController');

Route::resource('/coinaddress','CoinAddressesController');
Route::any('/test','CoinAddressesController@test');
Route::post('/coinaddress_ipn','CoinAddressesController@ipn');


//admin to view withdraw_request 10-06-2021
Route::get('/withdraw_request/index','AdminController@withdraw_request_index');
//admin to change the status of withdraw_request 10-06-2021
Route::get('/withdraw_request/change_status/{id}','AdminController@change_status');
Route::get('/withdraw_request/reject/{id}','AdminController@reject');


Route::resource('/gateway','GatewayController');

//merchant request 01-07-2021
Route::get('/merchant_request','MerchantsController@merchant_request');
//store merchant request 01-07-2021
Route::post('/merchant_request/store','MerchantsController@merchant_request_store');
//admin to view merchant request 01-07-2021
Route::get('/merchant_request/index','Admin\MerchantsController@merchant_request_index');
//admin to change the status of merchant_request 01-07-2021
Route::get('/merchant_request/change_status/{id}','Admin\MerchantsController@change_status');
Route::get('/merchant_request/reject/{id}','Admin\MerchantsController@reject');