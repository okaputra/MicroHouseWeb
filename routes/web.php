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

//this route only when user login as Officer
Route::group(['middleware' => ['auth','checkRole:officer']],function(){
    
    //routes dashboard
    Route::get('/homeOfficer', 'adminController@index')->name('home');
    
    //routes for residence
    Route::get('/rent', 'HousingController@index');
    Route::post('/storeNewR', 'HousingController@store');
    Route::get('/delete/{id}', 'HousingController@destroy');
    Route::get('/editResidence/{id}', 'HousingController@edit');
    Route::get('/showDetail/{id}', 'HousingController@show');
    Route::post('/updateResidence', 'HousingController@update');
    Route::post('/submitAllocate', 'HousingController@allocate');
    
    //routes for application
    Route::get('/application','ApplicationController@index');
    Route::get('/apkDetail/{id}','ApplicationController@show');
    Route::get('/deleteApk/{id}','ApplicationController@destroy');
    Route::get('/editApplication/{id}', 'ApplicationController@edit');
    Route::post('/updateApplication', 'ApplicationController@update');
    Route::post('/logout','AuthController@logOut')->name('logout');
});

//this route only when user login as Applicant
Route::group(['middleware' => ['auth','checkRole:applicant']],function(){
    
    //routes dashboard
    Route::get('/home', 'HomeController@index')->name('home');

    //routes for residence
    Route::get('/rent', 'HousingController@index');
    Route::get('/showDetail/{id}', 'HousingController@show');
    
    //routes for application
    Route::get('/application','ApplicationController@index');
    Route::post('/submitApplication','ApplicationController@store');
    Route::get('/apkDetail/{id}','ApplicationController@show');
    Route::get('/deleteApk/{id}','ApplicationController@destroy');
    Route::get('/editApplication/{id}', 'ApplicationController@edit');
    Route::post('/updateApplication', 'ApplicationController@update');
    Route::post('/logout','AuthController@logOut')->name('logout');
});

