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

//Halaman See more / Tempat Book
Route::get('/package/package', 'package\packageController@package')->name('package');

// BUAT ROUTE BARU HARUS DIDALAM MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {
	//booking form
	Route::get('/booking/booking', 'booking\bookingController@booking')->name('booking');
	//home - admin
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/human_resource/siswa/complete_data', 'human_resource\siswaController@complete_data')->name('complete_data');
	// MASTER
	Route::get('/master/master_intinerary', 'master\intinerary_controller@index')->name('master_intinerary');

});

