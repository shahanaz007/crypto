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
// Route::get('/withdraw','PaymentsController@withdraw');


Route::resource('/withdraw','WithdrawalsController');
Route::post('/get_rate_of','WithdrawalsController@get_rate_of');

Route::resource('/transfer','TransfersController');

