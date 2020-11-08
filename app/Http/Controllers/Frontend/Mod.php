<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;
use App\Models\Admin\Artikel as model_artikel;
use Illuminate\Support\Str;
class Mod extends Controller
{
    //
	public function index($slug){
		$subtitle 	= ucwords(str_replace("-"," ",$slug));
		$data['title']   = 'Seputar '.$subtitle ;
		$data = array_merge($this->meta(), $data) ;
		
		if(($slug == 'opd') ||($slug == 'kecamatan')){
		    return view('frontend.content.'.$slug ,compact('data'));
		}else{
		    return abort(404);
		}
	}

}
