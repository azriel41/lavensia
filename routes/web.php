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

// Route::get('/test', 'HomeController@test')->name('test');

//Halaman See more 
Route::get('/package/package', 'package\packageController@package')->name('package');

// BUAT ROUTE BARU HARUS DIDALAM MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {
	
	/*********** HALAMAN UTAMA ************/  
	

	//home - admin
	Route::get('/home', 'HomeController@index')->name('home');


	/******** END HALAMAN UTAMA ***********/
	

	/***************** BOOK ***************/  


	//booking form
	Route::get('/booking/booking', 'booking\bookingController@booking')->name('booking');
	

	/*************** END BOOK *************/


	/**************** MASTER **************/  
	

	//Category
	Route::get('/master/master_category', 'master\categoryController@index')->name('master_category');
	Route::get('/master/master_category/create', 'master\categoryController@create')->name('master_category_create');
	Route::post('/master/master_category/save', 'master\categoryController@save')->name('master_category_save');
	Route::get('/master/master_category/{id}/edit', 'master\categoryController@edit')->name('master_category_edit');
	Route::post('/master/master_category/update', 'master\categoryController@update')->name('master_category_update');
	Route::post('/master/master_category/delete', 'master\categoryController@delete')->name('master_category_delete');

	//Additional
	Route::get('/master/master_additional', 'master\additionalController@index')->name('master_additional');
	Route::get('/master/master_additional/create', 'master\additionalController@create')->name('master_additional_create');
	Route::post('/master/master_additional/save', 'master\additionalController@save')->name('master_additional_save');
	Route::get('/master/master_additional/{id}/edit', 'master\additionalController@edit')->name('master_additional_edit');
	Route::post('/master/master_additional/update', 'master\additionalController@update')->name('master_additional_update');
	Route::post('/master/master_additional/delete', 'master\additionalController@delete')->name('master_additional_delete');
	
	//Master intinerary
	Route::get('/master/master_intinerary', 'master\intinerary_controller@index')->name('master_intinerary');
	Route::get('/master/master_intinerary/create', 'master\intinerary_controller@create')->name('master_intinerary_create');
	Route::post('/master/master_intinerary/save', 'master\intinerary_controller@save')->name('save_intinerary');
	

	/************* END MASTER ***********/
	
	/*********** OPERATIONAL ************/  
	

	//payment
	Route::get('/payment/operational_payment', 'payment\paymentController@index')->name('operational_payment');
	Route::get('/payment/operational_payment/create', 'payment\paymentController@create')->name('operational_payment_create');
	Route::post('/payment/operational_payment/save', 'payment\paymentController@save')->name('operational_payment_save');
	Route::get('/payment/operational_payment/{id}/edit', 'payment\paymentController@edit')->name('operational_payment_edit');
	Route::post('/payment/operational_payment/update', 'payment\paymentController@update')->name('operational_payment_update');
	Route::post('/payment/operational_payment/delete', 'payment\paymentController@delete')->name('operational_payment_delete');
	

	/******** END OPERATIONAL ***********/


});

