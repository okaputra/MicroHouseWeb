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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Auth::routes();

//routes login

Route::get('/', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/', 'AuthController@postLogin');
Route::get('/register','AuthController@getRegister')->name('register');
Route::post('/register','AuthController@postRegister')->name('register')->middleware('guest');
Route::post('/logout','AuthController@logOut')->middleware('auth')->name('logout');

//routes for residence
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/rent', 'HousingController@index')->middleware('auth');
Route::post('/storeNewR', 'HousingController@store')->middleware('auth');
Route::get('/delete/{id}', 'HousingController@destroy')->middleware('auth');
Route::get('/editResidence/{id}', 'HousingController@edit')->middleware('auth');
Route::get('/showDetail/{id}', 'HousingController@show')->middleware('auth');
Route::post('/updateResidence', 'HousingController@update')->middleware('auth');

//routes for application
Route::get('/application','ApplicationController@index')->middleware('auth');
Route::post('/submitApplication','ApplicationController@store')->middleware('auth');
Route::get('/apkDetail/{id}','ApplicationController@show')->middleware('auth');
Route::get('/deleteApk/{id}','ApplicationController@destroy')->middleware('auth');
Route::get('/editApplication/{id}', 'ApplicationController@edit')->middleware('auth');
Route::post('/updateApplication', 'ApplicationController@update')->middleware('auth');
