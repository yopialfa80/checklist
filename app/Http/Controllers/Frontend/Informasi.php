<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;

class Informasi extends Controller
{
    //
	public function index(){

	}
	
	public function page($id){
		$title = ucwords(str_replace("-"," ",$id));
		
		$data['title']   = $title;
		$data = array_merge($this->meta(), $data) ;
		
		if($id == 'publikasi'){
			return self::publikasi();
		} else {
			return view('frontend.content.page',compact('data'));
		}
	}
	
	public function publikasi(){
		
		$data['title']   = 'Halaman Publikasi';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.publikasi',compact('data'));
	}
	
	public function ViewPublikasi(){
		
		$data['title']   = 'Detail Publikasi';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.view_publikasi',compact('data'));
	}

}
