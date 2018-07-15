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
	//booking form
	Route::get('/booking/booking', 'booking\bookingController@booking')->name('booking');
	//payment
	Route::get('/payment/payment', 'payment\paymentController@payment')->name('payment');
	//home - admin
	Route::get('/home', 'HomeController@index')->name('home');
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
	//Master Agent/Proffile
	Route::get('/human_resource/siswa/complete_data', 'human_resource\siswaController@complete_data')->name('complete_data');
});

