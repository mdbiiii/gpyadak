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



Auth::routes();

Route::get('auth/google','Auth\GoogleAuthController@redirect')->name('google-auth');
Route::get('auth/google/callback','Auth\GoogleAuthController@callback');

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/commodity','CommodityController@create')->name('commodity');
    Route::post('/commodity','CommodityController@store');
});
