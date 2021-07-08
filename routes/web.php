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
//admin to view the merchant_request 02-07-2021
Route::get('/merchant_request/view/{id}','Admin\MerchantsController@view');


//admin to view coupon category 02-07-2021
Route::get('/coupon_category/index','Admin\CouponCategoriesController@coupon_category_index');
//admin to add coupon category 02-07-2021
Route::get('coupon_category/add','Admin\CouponCategoriesController@coupon_category_add');
//store coupon category 02-07-2021
Route::post('/coupon_category/store','Admin\CouponCategoriesController@coupon_category_store');
//view edit coupon category page 02-07-2021
Route::get('/coupon_category/edit/{id}','Admin\CouponCategoriesController@coupon_category_edit');
//update coupon category page 02-07-2021
Route::post('/coupon_category/update/{id}','Admin\CouponCategoriesController@coupon_category_update');
//disable coupon category 02-07-2021
Route::get('/coupon_category/disable/{id}','Admin\CouponCategoriesController@coupon_category_disable');
//disable coupon category 02-07-2021
Route::get('/coupon_category/enable/{id}','Admin\CouponCategoriesController@coupon_category_enable');

//admin to view coupons  02-07-2021
Route::get('/admin_coupon/index','Admin\CouponsController@coupon_index');
//admin to add coupon  02-07-2021
Route::get('/admin_coupon/add','Admin\CouponsController@coupon_add');
//store coupon category 02-07-2021
Route::post('/admin_coupon/store','Admin\CouponsController@coupon_store');
//view edit coupon  page 02-07-2021
Route::get('/admin_coupon/edit/{id}','Admin\CouponsController@coupon_edit');
//update coupon  page 02-07-2021
Route::post('/admin_coupon/update/{id}','Admin\CouponsController@coupon_update');


//user  coupons for purchase  05-07-2021
Route::resource('/coupon_purchase','CouponPurchaseController');
Route::any('/coupons_purchase/{id}','CouponPurchaseController@index');
Route::post('/coupon_purchase/select_currency','CouponPurchaseController@select_currency');

//admin for locations  06-07-2021
Route::resource('/location','Admin\LocationsController');

//admin for brands  06-07-2021
Route::resource('/brand','Admin\BrandsController');

//user for my coupons 07-07-2021
Route::resource('/my_coupons','CouponsController');
