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

use App\Event;

//Route::get('/', function () {
//    $events = Event::all();
//    return view('index', ['events' => $events]);
//});

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

Route::get('/', 'HomeController@hahaha');

Route::get('backend/all_events', 'AdminController@allevent');

Route::get('events','EventController@index');
/*--------------------Ajax Start ----------------------------*/
/*--------------------Ajax End ----------------------------*/
Route::get('events/create','EventController@create');

Route::post('store','EventController@store');
