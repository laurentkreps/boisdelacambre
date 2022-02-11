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
    return view('layouts.home');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/tennis', function () {
    return view('tennis');
});
Route::get('/reservations', function () {
    return view('reservations');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/ecole', function () {
    return view('ecole');
});
Route::get('/inscriptions', 'App\Http\Controllers\inscriptionsController@create');
Route::post('/post/inscription', 'App\Http\Controllers\inscriptionsController@sendEmail');
