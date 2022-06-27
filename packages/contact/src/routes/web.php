<?php


use Illuminate\Support\Facades\Route;
use Terkinas\Contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'Terkinas\Contact\Http\Controllers'], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});
