<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;
use App\Models\Dashboard\CeklistKendaraan as M_Ceklist;
use Carbon\Carbon;
use Str;

class Temporary extends Controller
{
    
	public function index($code){
		
		$data['title']   = 'Temporary URL';

		$meta	= self::meta();
		$data	= array_merge($meta, $data) ;
		
		$result  = M_Ceklist::where('unix_url', $code)->firstOrFail();

		if((empty($result)) OR (is_null($result))){
			abort(404);
		}

		$unix_url	= $result->unix_url;
		$unix_url	= Str::substr($unix_url, 17, 10);
		$start		= Carbon::createFromTimestamp($unix_url);
		$end 		= Carbon::now();
		$different 	= $start->diffInDays($end);

		$data['data']   = $result;
		if($different >= 1){
			abort(404);
		}else{
			// $data    = response()->json($data, 200);
			return view('backend.content.ceklistKendaraan.temporary',compact('data'));
		}
	}

}