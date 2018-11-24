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
      $article = DB::table('d_article')->where('da_id',$id)->orderBy('da_id','DESC')->limit(7)->get();
    	$news = DB::table('d_article')->orderBy('da_id','DESC')->limit(7)->get();
        // return $article;
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


	    	return view('article.article',compact('article','news','category','intinerary','det','response','cart','jumlah'));
		}else{
	    	return view('article.article',compact('article','news','category','intinerary','det','response'));
		}
    }
    public function create()
    {
	   	return view('article.create_article',compact('data'));
    }
    public function edit($id)
    {

      $data = DB::table('d_article')->where('da_id',$id)->first();
      return view('article.edit_article',compact('data'));
    }
     public function update(Request $request)
    {
      // dd($request->all());
      $foto = DB::table('d_article')->max('da_id');

      if ($foto == null) {
        $foto = 1;
      }else{
        $foto +=1;
      }
      
      $art = DB::table('d_article')->where('da_id',$request->id)->get();

       if ($request->file('image') == null) {
           $filename = $art[0]->da_image;
       }else{
           $image = $request->file('image');
           $upload = 'article/article';
           $filename = $foto.'.jpg';
           Storage::put('article/article-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = article::findOrfail($request->id);
        $data->da_header  = $request->da_header;
        $data->da_image  = $filename;
        $data->da_desc  = $request->da_desc;
        $data->da_show  = $request->da_show;
        $data->da_created_by  = Auth::user()->username;
        $data->save();

       return redirect('function/article/article_index');
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
    public function delete(Request $request)
    {

      $ss = DB::table('d_article')->where('da_id',$request->id)->get();
      Storage::delete('article/article-'.$ss[0]->da_image);

      $data = DB::table('d_article')->where('da_id',$request->id)->delete();
    }
}
