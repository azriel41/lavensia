<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\intinerary;
use App\category;
use App\schedule;
use App\detail_intinerary;
use App\User;
use App\d_booking;
use App\flight_detail;
use App\additional;
use App\m_additional_intinerary;
use App\Repositories\TestRepo;

class all_variable extends Model
{
	public function intinerary()
	{
		$intinerary = new intinerary();
        return $intinerary = new TestRepo($intinerary);
	}

	public function category()
	{
		$category = new category();
        return $category = new TestRepo($category);
	}

	public function additional()
	{
		$additional = new additional();
        return $additional = new TestRepo($additional);
	}

	public function m_additional_intinerary()
	{
		$m_additional_intinerary = new m_additional_intinerary();
        return $m_additional_intinerary = new TestRepo($m_additional_intinerary);
	}

	public function schedule()
	{
		$schedule = new schedule();
        return $schedule = new TestRepo($schedule);
	}

	public function detail_intinerary()
	{
		$detail_intinerary = new detail_intinerary();
        return $detail_intinerary = new TestRepo($detail_intinerary);
	}

	public function booking()
	{
		$booking = new d_booking();
        return $booking = new TestRepo($booking);
	}

	public function flight_detail()
	{
		$flight_detail = new flight_detail();
        return $flight_detail = new TestRepo($flight_detail);
	}

	public function user()
	{
		$user = new User();
        return $user = new TestRepo($user);
	}
}
