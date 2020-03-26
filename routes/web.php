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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rent', 'HousingController@index');
Route::post('/storeNewR', 'HousingController@store');
Route::get('/delete/{id}', 'HousingController@destroy');
Route::get('/showDetail/{id}', 'HousingController@show');
Route::get('/editResidence/{id}', 'HousingController@edit');
Route::post('/updateResidence', 'HousingController@update');

//routes for application
Route::get('/application','ApplicationController@index');
