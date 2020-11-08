<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;
use App\Models\Admin\Artikel as model_artikel;
use Illuminate\Support\Str;
class News extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Berita Kabupaten Tulang Bawang';
		$data['action']  = '';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.news',compact('data'));
	}
	
	public function read($id, $slug){
		
		$subtitle 	= ucwords(str_replace("-"," ",$slug));
		$artikel	= model_artikel::where('id', $id)->firstOrFail();
		$artikel->tanggal = date('d F Y', strtotime($artikel->tanggal));
		$data['title']   	= 'Detail Berita';
		$data['action']  = '';
		$data['subtitle']   = Str::limit(strip_tags($subtitle), 50, "..");
		$data['metapage'] 	= $artikel;
		$data = array_merge($this->meta(), $data) ;
		 
		
		$data['metapage']->increment('view');
		return view('frontend.content.read',compact('data'));
	}
	
	public function kategori($id){
		
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = $title;
		$data['action']  = '/kategori/'.$id;
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.news',compact('data'));
	}
	
	public function tag($id){
		
		$title = ucwords(str_replace("-"," ",$id));
		$data['title']   = 'Tag Berita '.$title;
		$data['action']  = '';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.news',compact('data'));
	}

}
