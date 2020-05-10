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
    return view('index');
});

Route::get('/aboutus','AboutusController@index');
Route::get('/blog','BlogController@index');
Route::get('/blogdetails','BlogdetailsController@index');
Route::get('/contact','ContactController@index');
Route::get('/index','IndexController@index');
Route::get('/main','MainController@index');
Route::get('/roomdetails','RoomdetailsController@index');
Route::get('/room','RoomController@index');
Route::get('/index', 'IndexController@index');
Route::get('/login','LoginController@index');
Route::get('/createaccount','CreateaccountController@index');
Route::get('/resetpass','ResetpassController@index');
