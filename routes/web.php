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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/onlineleave', 'HomeController@onlineleave');
Route::get('/timetable', 'HomeController@timetable');

Route::post('/checkinout','CheckInOutController@store');


// Route::get('/', 'PostController@index');
Route::get('/add', 'PostController@add')->middleware('auth');
Route::post('/add', 'PostController@store');

Route::post('/onlineleave','leavesController@store');

Auth::routes();


