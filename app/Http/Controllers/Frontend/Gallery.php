<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;

class Gallery extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Galeri Kabupaten Tulang Bawang';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.gallery',compact('data'));
	}

}
