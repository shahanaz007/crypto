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
Route::post('/get_rate_of_currency','PaymentsController@get_rate_of_currency');


Route::resource('/withdraw','WithdrawalsController');
Route::post('/get_rate_of','WithdrawalsController@get_rate_of');

Route::resource('/transfer','TransfersController');

