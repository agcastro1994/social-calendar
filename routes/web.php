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


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CalendarController@index');

Route::get('/calendar/{day}/{month}','CalendarController@create');

Route::post('/publication/{day}/{m_id}', 'CalendarController@store');

Route::get('/month/create','MonthController@create');

Route::post('/month/store','MonthController@store');

Route::get('/month/{month}', 'MonthController@show');

Route::get('/day/{day}/{month}', 'DayController@show');







