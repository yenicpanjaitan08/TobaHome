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


Route::get('/logout', 'AuthController@logout');
Route::get('/home','HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'],function(){

    Route::group(['middleware'=>'OwnerMiddleware'], function(){     
        Route::get('/owner','OwnerController@index');
        Route::get('/ownerdashboard','OwnerController@index');

        Route::get('/ownerhomestay','OwnerHomestayController@homestay');
        Route::get('/ownerhomestay/{id}/view','OwnerHomestayController@view');
        Route::POST('/ownerhomestay/create','OwnerHomestayController@create');
        Route::get('/ownerhomestay/{id}/edit','OwnerHomestayController@edit');
        Route::POST('/ownerhomestay/{id}/update','OwnerHomestayController@update');
        Route::get('/ownerhomestay/{id}/delete','OwnerHomestayController@delete');

        Route::get('/ownerbooking','OwnerBookingController@booking');
        Route::get('/ownerbooking/{id}/view','OwnerBookingController@view');
        Route::get('/ownerbooking/{id}/delete','OwnerBookingController@delete');

        Route::get('/ownertype','OwnerTypeController@type');
        Route::get('/ownertype/{id}/view','OwnerTypeController@view');
        Route::post('/ownertype/create','OwnerTypeController@create');
        Route::get('/ownertype/{id}/edit','OwnerTypeController@edit');
        Route::post('/ownertype/{id}/update','OwnerTypeController@update');
        Route::get('/ownertype/{id}/delete','OwnerTypeController@delete');

        Route::get('/ownerfacilities','OwnerFacilitiesController@facilities');
        Route::get('/ownerfacilities/{id}/view','OwnerFacilitiesController@view');
        Route::POST('/ownerfacilities/create','OwnerFacilitiesController@create');
        Route::get('/ownerfacilities/{id}/edit','OwnerFacilitiesController@edit');
        Route::POST('/ownerfacilities/{id}/update','OwnerFacilitiesController@update');
        Route::get('/ownerfacilities/{id}/delete','OwnerFacilitiesController@delete');

        Route::get('/ownerakun/{id}/view','OwnerAkunController@view');
        
        Route::get('/ownerprofil/{id}/edit','OwnerAkunController@edit');
        Route::post('/ownerprofil/{id}/update','OwnerAkunController@update');
        Route::get('/ownervisitor','OwnerAkunController@show_visitor');
        Route::post('/ownervisitor/create','OwnerAkunController@create');
        Route::get('/ownervisitor/{id}/delete','OwnerAkunController@delete');
        Route::get('/ownervisitor/{id}/detail','OwnerAkunController@detail');
        Route::get('/ownervisitor/{id}/edit','OwnerAkunController@edit');
        Route::POST('/ownervisitor/{id}/update','OwnerAkunController@update');

        Route::get('/ownerreview','OwnerReviewController@index');
        Route::get('/ownerreview/{id}/edit','OwnerReviewController@edit');
        Route::POST('/ownerreview/{id}/update','OwnerReviewController@update');

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
        Route::post('/booking', 'VisitorController@store')->name('booking');
        Route::get('/visitor/facility','VisitorFacilityController@facility');
        Route::get('/visitor/facilitydetail','VisitorFacilityDetailController@facilitydetail');
        Route::get('/visitor/aboutus','VisitorAboutusController@index');
        Route::get('/visitor/blog','VisitorBlogController@index');
        Route::get('/visitor/gallery','VisitorBlogdetailsController@index');
        Route::get('/visitor/contact','VisitorContactController@index');
        
        Route::get('/homestaydetails', 'HomestayDetailController@index');
        Route::post('/homestaydetails', 'HomestayDetailController@store');
        Route::get('/homestaydetails/edit/{id}', 'HomestayDetailController@edit');
        Route::get('/homestaydetails/delete/{rating}', 'HomestayDetailController@destroy');
        Route::post('/homestaydetails/update', 'HomestayDetailController@update')->name('update');


        Route::get('/visitor/logout', 'AuthController@logout');
    });
    
    
});