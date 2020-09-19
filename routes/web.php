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

//Route::get('auth/google','Auth\GoogleAuthController@redirect')->name('google-auth');
//Route::get('auth/google/callback','Auth\GoogleAuthController@callback');

Route::get('/', 'HomeController@index')->name('home');


Route::namespace('Admin')->group(function (){

   Route::prefix('admin')->middleware('auth')->group(function (){
       Route::get('/','AdminController@index')->name('admin');
       //Commodity routs
       Route::get('/commodity','CommodityController@create')->name('commodity');
       Route::post('/commodity','CommodityController@store');
       Route::get('/commodity/{commodity}/edit','CommodityController@edit')->name('edit_commodity');
       Route::put('/commodity/{commodity}/edit','CommodityController@update');
       Route::get('/commodity/show','CommodityController@show')->name('show_commodity');
       Route::delete('/commodity/{commodity}/delete','CommodityController@destroy');
       //Car type routs
       Route::get('/cartype','CartypeController@create')->name('create_cartype');
       Route::post('/cartype','CartypeController@store');
       Route::get('/cartype/{cartype}/edit','CartypeController@edit')->name('edit_cartype');
       Route::put('/cartype/{cartype}/edit','CartypeController@update');
       Route::get('/cartype/show','CartypeController@show')->name('show_cartype');
       Route::delete('/cartype/{cartype}/delete','CartypeController@destroy');


//brand routs
       Route::get('/brand','BrandController@create')->name('create_brand');
       Route::post('/brand','BrandController@store');
       Route::get('/brand/{brand}/edit','BrandController@edit')->name('edit_brand');
       Route::put('/brand/{brand}/edit','BrandController@update');
       Route::get('/brand/show','BrandController@show')->name('show_brand');
       Route::delete('/brand/{brand}/delete','BrandController@destroy');
   });



    Route::get('/commodity/{commodity}','CommodityController@show_commo')->name('show_1_commodity');





});

