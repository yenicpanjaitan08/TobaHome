<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
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

Route::get('/homebaru', 'MainController@main');
Route::get('/homebaru', 'MainController@rooms');
Route::get('/homestay','HomestayController@homestay');
Route::get('/homestay/{id}/view','HomestayController@view');
Route::get('/rooms','RoomsController@rooms');
Route::get('/rooms/{id}/view','RoomsController@view');
Route::get('/facility','FacilityController@facility');
Route::get('/facilitydetail','FacilityDetailController@facilitydetail');
Route::get('/aboutus','AboutusController@index');
Route::get('/blog','BlogController@index');
Route::get('/gallery','BlogdetailsController@index');
Route::get('/contact','ContactController@index');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/logout', 'AuthController@logout');

    Route::group(['middleware'=>'OwnerMiddleware'], function(){     
        Route::get('/owner','OwnerController@index');
        Route::get('/owner/dashboard','OwnerController@index');

        Route::get('/owner/homestay','OwnerHomestayController@homestay');
        Route::get('/owner/homestay/{id}/view','OwnerHomestayController@view');
        Route::POST('/owner/homestay/create','OwnerHomestayController@create');
        Route::get('/owner/homestay/{id}/edit','OwnerHomestayController@edit');
        Route::POST('/owner/homestay/{id}/update','OwnerHomestayController@update');
        Route::get('/owner/homestay/{id}/delete','OwnerHomestayController@delete');

        Route::get('/owner/booking','OwnerBookingController@booking');
        Route::get('/owner/booking/{id}/view','OwnerBookingController@view');

        Route::get('/owner/type','OwnerTypeController@type');
        Route::get('/owner/type/{id}/view','OwnerTypeController@view');
        Route::post('/owner/type/create','OwnerTypeController@create');
        Route::get('/owner/type/{id}/edit','OwnerTypeController@edit');
        Route::post('/owner/type/{id}/update','OwnerTypeController@update');
        Route::get('/owner/type/{id}/delete','OwnerTypeController@delete');

        Route::get('/owner/facilities','OwnerFacilitiesController@facilities');
        Route::get('/owner/facilities/{id}/view','OwnerFacilitiesController@view');
        Route::POST('/owner/facilities/create','OwnerFacilitiesController@create');
        Route::get('/owner/facilities/{id}/edit','OwnerFacilitiesController@edit');
        Route::POST('/owner/facilities/{id}/update','OwnerFacilitiesController@update');
        Route::get('/owner/facilities/{id}/delete','OwnerFacilitiesController@delete');

        Route::get('/owner/akun/{id}/view','OwnerAkunController@view');
        
        Route::get('/owner/profil/{id}/edit','OwnerAkunController@edit');
        Route::post('/owner/profil/{id}/update','OwnerAkunController@update');
        Route::get('/owner/visitor','OwnerAkunController@show_visitor');
        Route::post('/owner/visitor/create','OwnerAkunController@create');
        Route::get('/owner/visitor/{id}/delete','OwnerAkunController@delete');
        Route::get('/owner/visitor/{id}/detail','OwnerAkunController@detail');
        Route::get('/owner/visitor/{id}/edit','OwnerAkunController@edit');
        Route::POST('/owner/visitor/{id}/update','OwnerAkunController@update');

        Route::get('/owner/review','OwnerReviewController@index');
        Route::get('/owner/review/{id}/edit','OwnerReviewController@edit');
        Route::POST('/owner/review/{id}/update','OwnerReviewController@update');

        Route::get('/owner/logout', 'AuthController@logout');
    });

    Route::group(['middleware'=>'AdminMiddleware'], function(){
        Route::resource('/admin', 'AdminDashboardadminController');
        Route::resource('/admin/fasilitas','AdminFasilitasController');
        Route::resource('/admin/ruangan','AdminRuanganController');
        Route::resource('/admin/homestay','AdminHomestayController');

        Route::resource('/admin/dashboard1', 'AdminDashboardadminController');

        Route::resource('/admin/order','AdminOrderController');

        Route::get('/admin/logout', 'AuthController@logout');
    });

    Route::group(['middleware'=>'VisitorMiddleware'], function(){
        Route::get('/visitor', 'VisitorHomeController@main');
        Route::get('/visitor/home', 'VisitorHomeController@main');
        Route::get('/visitor/visitor', 'VisitorHomeController@main');
        Route::get('/visitor/logout', 'AuthController@logout');

        Route::get('/visitor/homestay','VisitorHomestayController@homestay');
        Route::get('/visitor/homestay/{id}/view','VisitorHomestayController@view');
        Route::get('/visitor/rooms','VisitorRoomsController@rooms');
        Route::get('/visitor/rooms','VisitorRoomsController@rooms');
        Route::get('/visitor/rooms/{id}/view','VisitorRoomsController@view');
                
        Route::post('/homestay/{id}/check', 'HomestayController@check');
        Route::post('/booking', 'BookingsController@store')->name('booking');
        Route::get('/visitor/facility','VisitorFacilityController@facility');
        Route::get('/visitor/facilitydetail','VisitorFacilityDetailController@facilitydetail');
        Route::get('/visitor/aboutus','VisitorAboutusController@index');
        Route::get('/visitor/blog','VisitorBlogController@index');
        Route::get('/visitor/gallery','VisitorBlogdetailsController@index');
        Route::get('/visitor/contact','VisitorContactController@index');

        Route::get('/visitor/logout', 'AuthController@logout');
    });
    
    
});