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
    return view('homebaru');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homebaru', 'MainController@main');
Route::get('/homebaru', 'MainController@rooms');

Route::get('/homestay','HomestayController@homestay');
Route::get('/homestay/{id}/view','HomestayController@view');

Route::get('/rooms','RoomsController@rooms');
Route::get('/rooms/{id}/view','RoomsController@view');

Route::get('/facility','FacilityController@facility');
Route::get('/facilitydetail','FacilityDetailController@facilitydetail');

