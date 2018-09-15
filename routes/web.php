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
	$category = App\category::all();

	$intinerary = App\intinerary::all();

	$det = [];
	$cat = [];
	foreach ($intinerary as $index => $val) {
		$det = $val->detail_intinerarys;
		$cat = $val->category;
	}
	$book = App\User::all();

	if (Auth::User() != null) {

			$cart   = DB::table('d_booking')
						->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
						->leftjoin('m_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
						->where('db_users',Auth::User()->role_id)
						->whereRaw('db_total = db_total_remain')
						->get();


			$jumlah = count(DB::table('d_booking')
						->where('db_users',Auth::User()->role_id)
						->whereRaw('db_total = db_total_remain')
						->get());
			// return $cart;

    	return view('welcome',compact('category','intinerary','det','response','cart','jumlah'));
	}else{
    	return view('welcome',compact('category','intinerary','det','response'));
	}

})->name('dashboard');

Route::get('/package/package_modal_detail', 'package\packageController@package_modal_detail')->name('package_modal_detail');


Auth::routes();

//intinerary ajax modal


//Halaman See more 

//package 
Route::get('/package/{id}/package', 'package\packageController@package')->name('package');
Route::get('/package/package_pdf', 'package\packageController@package_pdf')->name('package_pdf');
//partner
Route::get('/package/package/{id}', 'package\packageController@package')->name('package');
Route::get('/partner/partner', 'additional\partnerController@partner')->name('partner');

// BUAT ROUTE BARU HARUS DIDALAM MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {

	/*********** PAGE AGENT ************/  

	Route::get('/agent/master_agent_agent', 'agent\agent_agentController@agent')->name('master_agent_agent');
	Route::get('/agent/master_agent_agent_create', 'agent\agent_agentController@agent_create')->name('master_agent_agent_create');
	Route::post('/agent/master_agent_agent_save', 'agent\agent_agentController@agent_save')->name('master_agent_agent_save');
	Route::get('/agent/master_agent_agent_datatable', 'agent\agent_agentController@agent_datatable')->name('master_agent_agent_datatable');




	/*********** HALAMAN UTAMA ************/  
	
	// STORAGE URL
	Route::get('/storage/app')->name('storage');
	
	//home - admin
	Route::get('/home', 'HomeController@index')->name('home');

	

	//Profile
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::get('/profile/edit', 'HomeController@edit_profile')->name('edit_profile');
	Route::post('/profile/save', 'HomeController@save_profile')->name('save_profile');

	/******** END HALAMAN UTAMA ***********/
	

	/***************** BOOK ***************/  
	//booking form
	Route::get('/booking/booking', 'booking\bookingController@booking')->name('booking');
	Route::post('/booking/save', 'booking\bookingController@save')->name('save_book');
	Route::get('/booking/booking_additional', 'booking\bookingController@booking_additional')->name('booking_additional');

	//PAYMENT USER
	Route::get('/payment_page/payment', 'payment_page\payment_page_controller@payment')->name('payment_page');
	Route::get('/payment_page/payment_termin', 'payment_page\payment_page_controller@payment_termin')->name('payment_termin');
	Route::post('/payment_page/save', 'payment_page\payment_page_controller@save_first_payment')->name('save_payment_user');
	Route::post('/payment_page/save_termin', 'payment_page\payment_page_controller@save_termin')->name('save_termin');
		//booking detail
		Route::get('/detil_payment/payment', 'payment_page\payment_page_controller@payment')->name('payment_page');


	//BOOKINGLIST
	Route::get('/booking/booking_list', 'booking\booking_listController@booking_list')->name('booking_list');
		//booking detail
		Route::get('/booking/bookingdetail/{id}', 'booking\booking_listController@bookingdetail')->name('bookingdetail');
		//booking detail print itin 
		Route::get('/booking/bookingdetail_download_itin/{id}', 'booking\booking_listController@bookingdetail_download_itin')->name('bookingdetail_download_itin');
		//booking detail print pdf 
		Route::get('/booking/bookingdetail_download_pdf/{id}', 'booking\booking_listController@bookingdetail_download_pdf')->name('bookingdetail_download_pdf');
		//booking detail print final 
		Route::get('/booking/bookingdetail_download_final/{id}', 'booking\booking_listController@bookingdetail_download_final')->name('bookingdetail_download_final');
		//booking detail print md_tata_tertib 
		Route::get('/booking/bookingdetail_download_md_tata_tertib/{id}', 'booking\booking_listController@bookingdetail_download_md_tata_tertib')->name('bookingdetail_download_md_tata_tertib');
		//booking detail print invoice 
		Route::get('/booking/bookingdetail_download_invoice/{id}', 'booking\booking_listController@bookingdetail_download_invoice')->name('bookingdetail_download_invoice');

	//BOOKING ALL INDEX
	Route::get('/booking/booking_all', 'booking\booking_allController@booking_all')->name('booking_all');
		//Datatable
		Route::get('/booking/datatable_booking_all', 'booking\booking_allController@datatable_booking_all')->name('datatable_booking_all');
		Route::get('/booking/datatable_booking_detail', 'booking\booking_allController@datatable_booking_detail')->name('datatable_booking_detail');
		//Function Handle
		Route::get('/booking/booking_handling/{id}', 'booking\booking_allController@booking_handling')->name('booking_handling');
		Route::post('/booking/booking_handling/update_book', 'booking\booking_allController@update_book')->name('update_book');
		Route::get('/booking/edit/{id}', 'booking\booking_allController@edit_booking')->name('edit_booking');
		Route::post('/booking/booking_handling/update_book_edit', 'booking\booking_allController@update_book_edit')->name('update_book_edit');
		Route::get('/booking/booking_detail/{id}', 'booking\booking_allController@booking_detail')->name('booking_detail');
		Route::get('/booking/booking_all/delete', 'booking\booking_allController@delete')->name('booking_all_delete');
		Route::get('/booking/booking_all/approve_payment', 'booking\booking_allController@approve_payment')->name('approve_payment');
		Route::get('/booking/booking_all/delete_payment', 'booking\booking_allController@delete_payment')->name('delete_payment');
		Route::get('/booking/booking_all/check_payment', 'booking\booking_allController@check_payment')->name('check_payment');


	//BOOK ADMIN DAN HANDLE BY
	Route::get('/booking/booking_handle', 'booking\booking_handleController@booking_handle')->name('booking_handle');
		//Datatable
		Route::get('/booking/datatable_booking_handle', 'booking\booking_handleController@datatable_booking_handle')->name('datatable_booking_handle');
		

	//BOOKING PRINT 
	Route::get('/booking/booking_print', 'booking\booking_printController@booking_print')->name('booking_print');
		//Datatable
		Route::get('/booking/datatable_booking_print', 'booking\booking_printController@datatable_booking_print')->name('datatable_booking_print');
		//Print excel
		Route::get('/booking/booking_print/print_excel/{id}', 'booking\booking_printController@print_excel')->name('print_excel');
		//Print pdf
		Route::get('/booking/booking_print/print_pdf/{id}', 'booking\booking_printController@print_pdf')->name('print_pdf');
		//Print passport
		Route::get('/booking/booking_print/print_passport/{id}', 'booking\booking_printController@print_passport')->name('print_passport');

	//REPORT 
	Route::get('/report/report_profit', 'report\report_profitController@report_profit')->name('report_profit');


	/*************** END BOOK *************/


	/**************** MASTER **************/  
	

	//Category
	Route::get('/master/master_category', 'master\categoryController@index')->name('master_category');
	Route::get('/master/master_category/create', 'master\categoryController@create')->name('master_category_create');
	Route::post('/master/master_category/save', 'master\categoryController@save')->name('master_category_save');
	Route::get('/master/master_category/{id}/edit', 'master\categoryController@edit')->name('master_category_edit');
	Route::post('/master/master_category/update', 'master\categoryController@update')->name('master_category_update');
	Route::post('/master/master_category/delete', 'master\categoryController@delete')->name('master_category_delete');

	//agent
	Route::get('/master/agent', 'master\agentController@agent')->name('master_agent');
	Route::get('/master/agent/datatable_agent', 'master\agentController@datatable_agent')->name('datatable_agent');
	Route::get('/master/master_agent/{id}/edit', 'master\agentController@agent_edit')->name('master_agent_edit');
	Route::post('/master/master_agent/{id}/update', 'master\agentController@agent_update')->name('master_agent_update');
	Route::get('/master/master_agent/{id}/delete', 'master\agentController@agent_delete')->name('master_agent_delete');
	Route::get('/master/agent/agent_approve', 'master\agentController@agent_approve')->name('master_agent_approve');

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
	Route::get('/master/master_intinerary/edit/{id}', 'master\intinerary_controller@edit')->name('master_intinerary_edit');
	Route::post('/master/master_intinerary/save', 'master\intinerary_controller@save')->name('save_intinerary');
	Route::get('/master/master_intinerary/datatable', 'master\intinerary_controller@datatable_intinerary')->name('datatable_intinerary');
	Route::get('/master/master_intinerary/schedule', 'master\intinerary_controller@schedule')->name('schedule');
	Route::get('/master/master_intinerary/departure', 'master\intinerary_controller@departure')->name('departure');
	Route::get('/master/master_intinerary/ganti_nama', 'master\intinerary_controller@ganti_nama')->name('ganti_nama');
	Route::get('/master/master_intinerary/delete', 'master\intinerary_controller@delete')->name('delete_intinerary');
	Route::get('/master/master_intinerary/approve', 'master\intinerary_controller@approve')->name('approve_itinerary');
	Route::get('/master/master_intinerary/intinerary_detail', 'master\intinerary_controller@intinerary_detail')->name('intinerary_detail');
	Route::post('/master/master_intinerary/save_detail', 'master\intinerary_controller@save_detail')->name('save_detail');
	

	/************* END MASTER ***********/
	
	/*********** OPERATIONAL ************/  

	//payment
	Route::get('/payment/operational_payment', 'payment\paymentController@index')->name('operational_payment');
	Route::get('/payment/operational_payment/create_admin', 'payment\paymentController@create_admin')->name('operational_payment_create_admin');
	Route::get('/payment/operational_payment/create_agent', 'payment\paymentController@create_agent')->name('operational_payment_create_agent');
	Route::post('/payment/operational_payment/save', 'payment\paymentController@save')->name('operational_payment_save');
	Route::get('/payment/operational_payment/{id}/edit', 'payment\paymentController@edit')->name('operational_payment_edit');
	Route::post('/payment/operational_payment/update', 'payment\paymentController@update')->name('operational_payment_update');
	Route::post('/payment/operational_payment/delete', 'payment\paymentController@delete')->name('operational_payment_delete');
	

	/******** END OPERATIONAL ***********/


});

