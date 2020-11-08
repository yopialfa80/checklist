<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;

class Contact extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Kontak Kami';
		$data = array_merge($this->meta(), $data) ;
		
		return view('frontend.content.contact',compact('data'));
	}

}
