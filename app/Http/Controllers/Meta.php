<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

use App\Models\Setting as model_setting;

class Meta extends Controller
{
		
	public static function Meta(){
		
		$setting = model_setting::firstOrFail();
		if((!is_null($setting)) AND ($setting->count() != 0)){
			if($setting->logo == null){
				$setting->logo						= url('assets/images/web/logo.png');
			}else{
				$setting->logo						= url('assets/images/web/'.$setting->logo);
			}
		}

		foreach($setting->toArray() as $key=>$val){
			$result[$key] = $val;
		}
		
		return $result;

	} 

}
