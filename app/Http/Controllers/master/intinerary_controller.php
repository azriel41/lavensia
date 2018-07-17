<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TestRepo;
use App\intinerary;
use App\category;

use App\User;
use DB;
use carbon\Carbon;
use Auth;
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
    	$category = new TestRepo($category);
    	
        $data =  $category->all();
    	return view('master.master_intinerary.create_intinerary',compact('data'));
    }

    public function save(Request $req)
    {
        return DB::transaction(function() use ($req) {  
            $name = Auth::user()->name;
            $intinerary = new intinerary();
            $intinerary = new TestRepo($intinerary);

            $id = $intinerary->max('mi_id');

            $check = $intinerary->same('mi_nota',$req->tour_code);
            // dd($req->all());
            $head = array(
                    'mi_id'         => $id,
                    'mi_nota'       => $req->tour_code,
                    'mi_name'       => $req->intinerary,
                    'category_id'   => $req->category,
                    'mi_highlight'  => $req->highlight,
                    'mi_by'         => $req->caption_by,
                    'updated_at'    => Carbon::now(),
                    'updated_by'    => $name
                    );
            if ($check == null) {
                $head['created_at'] = Carbon::now();
                $head['created_by'] = $name;
                $save_head = $intinerary->create($head);
            }else{
                $update_head = $intinerary->update($head,'mi_nota',$req->tour_code);

            }

            
            for ($i=0; $i < count($req->day); $i++) { 
            }



        });
    }
}
