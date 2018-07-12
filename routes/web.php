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
Route::group(['middleware' => 'guest'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});

Auth::routes();

// Route::get('/test', 'HomeController@test')->name('test');


//data siswa
Route::get('/human_resource/siswa/siswa', 'human_resource\siswaController@siswa')->name('siswa');
Route::get('/human_resource/siswa/complete_data', 'human_resource\siswaController@complete_data')->name('complete_data');
Route::get('/human_resource/siswa/save_siswa', 'human_resource\siswaController@save_siswa')->name('save_siswa');


//data guru
Route::get('/human_resource/siswa/guru', 'human_resource\guruController@guru')->name('guru');


//Halaman See more / Tempat Book
Route::group(['middleware' => 'auth'], function () {
	Route::get('/package/package', 'package\packageController@package')->name('package');
	Route::get('/home', 'HomeController@index')->name('home');
});

