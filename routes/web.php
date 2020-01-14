<?php

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

Route::get('/home', 'HomeController@index')->name('home');


// company route
Route::get('/company','Company\CompanyController@index');
Route::get('/company/create','Company\CompanyController@create');
Route::post('/company','Company\CompanyController@store');
Route::get('/company/{company}','Company\CompanyController@show');
Route::get('/company/{company}/edit','Company\CompanyController@edit');
Route::patch('/company/{company}','Company\CompanyController@update');
Route::delete('/company/{company}','Company\CompanyController@destroy');
