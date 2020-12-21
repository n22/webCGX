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
})->name('home');

Route::get('/goback', function () {
    return Redirect::back()->with('submit-success', 1);
})->name('goback');

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');
Route::get('captcha-form', 'CaptchaController@captchForm');
Route::post('store-captcha-form', 'CaptchaController@storeCaptchaForm');
