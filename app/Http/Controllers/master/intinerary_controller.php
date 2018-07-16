<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TestRepo;
use App\intinerary;
use App\category;
use App\User;
class intinerary_controller extends Controller
{
	protected $model;

	public function __construct(intinerary $intinerary)
	{
	   // set the model
	   $this->model = new TestRepo($intinerary);
	}
    public function index()
    {
    	return view('master.master_intinerary.index_intinerary');
    }

    public function create()
    {
    	$category = new category();
    	$this->model = new TestRepo($category);
    	
        $data $this->model->all();
    	return view('master.master_intinerary.create_intinerary',compact('data'));
    }
}
