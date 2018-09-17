<?php

namespace App\Http\Controllers\article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\roles;
use Session;
use Auth;
use App\category;
use App\intinerary;
use DB;
use App\article;
use Storage;
class articleController extends Controller
{
    public function article_index()
    {
    	$data = DB::table('d_article')->get();

	   	return view('article.index_article',compact('data'));
    }
    public function article($id)
    {
    	$data = article::where('da_show',$id)->first();
    	
    	$news = DB::table('d_article')->orderBy('da_id','DESC')->limit(7)->get();
        // return $news;
        $category = category::all();

		$intinerary = intinerary::all();

		$det = [];
		$cat = [];
		foreach ($intinerary as $index => $val) {
			$det = $val->detail_intinerarys;
			$cat = $val->category;
		}
		$book = User::all();

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


	    	return view('article.article',compact('news','data','category','intinerary','det','response','cart','jumlah'));
		}else{
	    	return view('article.article',compact('news','data','category','intinerary','det','response'));
		}
    }
    public function create()
    {
	   	return view('article.create_article',compact('data'));
    }
    public function save(Request $request)
    {

    	$foto = DB::table('d_article')->max('da_id');

    	if ($foto == null) {
    		$foto = 1;
    	}else{
    		$foto +=1;
    	}

    	if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'article/article';
           $filename = $foto.'.jpg';
           Storage::put('article/article-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
          $data = new article;
	      $data->da_header  = $request->da_header;
	      $data->da_image  = $filename;
	      $data->da_desc  = $request->da_desc;
	      $data->da_show  = $request->da_show;
	      $data->da_created_by  = Auth::user()->username;
	      $data->save();

       return redirect('function/article/article_index');
    }
}
