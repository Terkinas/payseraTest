<?php

use App\Http\Controllers\PaymentController;
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

Route::get('/cart', [PaymentController::class, 'index']);
Route::post('/', [PaymentController::class, 'request'])->name('pay.request');

Route::get('/accept', function () {
    return view('accept');
});

Route::get('/cancel', function () {
    return view('cancel');
});

Route::get('/callback', function () {
    return view('callback');
});
