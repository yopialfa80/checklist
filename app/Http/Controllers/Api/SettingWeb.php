<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api as Controller;
use Illuminate\Http\Request;
use \App\Models\Dashboard\SettingWeb as M_Setting_Web;
use Image;

class SettingWeb extends Controller {

    public function index() {

		$result['setting_web'] = M_Setting_Web::first();
		if (!is_null($result['setting_web']->logo)) {
			$result['setting_web']->logo = url('assets/images/web/'.$result['setting_web']->logo);
		};
		return $this->sendResponseOk($result);
    }
    
    public function update(request $request, $id) {

		$result = M_Setting_Web::where('id', $id)->first();
		if($request->file('userfile')){
			
			$originalImage  = $request->file('userfile');
			$imageFile      = Image::make($originalImage);
			$originalPath   = public_path('/assets/images/web/');
			$time           = time();
			$image_path     = $originalPath.$result->logo;

			if(!is_dir($originalPath)) {
				mkdir($originalPath, 0755, true);
			}
			
			if(file_exists($image_path)) {
				@unlink($image_path);
			}
		
	        $imageFile->save($originalPath.$time.$originalImage->getClientOriginalName());
	        $image = $time.$originalImage->getClientOriginalName();
		}else{
			$image = $result->logo;
		}		

		$input = M_Setting_Web::where('id', $id)->update([
			'judul'      => $request->judul,
			'deskripsi'  => $request->deskripsi,
			'googlecode' => $request->googlecode,
			'metatag'    => $request->metatag,
			'metadesc'   => $request->metadesc,
			'metakey'    => $request->metakey,
			'footer'     => $request->footer,
			'alamat'     => $request->alamat,
			'telp'       => $request->telp,
			'telp2'      => $request->telp2,
			'email'      => $request->email,
			'logo'       => $image,	
			'fb'         => $request->fb,
			'twitter'    => $request->twitter,
			'linked'     => $request->linked,
			'google'     => $request->google,
			'youtube'    => $request->youtube,
			'maps'    => $request->maps,
		]);
		return $this->sendResponseUpdate(null);
	}
};