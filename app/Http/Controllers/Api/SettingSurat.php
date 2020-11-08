<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api as Controller;
use \App\Models\Dashboard\SettingSurat as M_SettingSurat;
use Illuminate\Http\Request;
use Image;

class SettingSurat extends Controller
{
    public function index() {

		$result['setting_surat'] = M_SettingSurat::first();
		if (!is_null($result['setting_surat']->logo_kanan)) {
			$result['setting_surat']->logo_kanan = url('assets/images/web/'.$result['setting_surat']->logo_kanan);
        };
        
        if (!is_null($result['setting_surat']->logo_kiri)) {
			$result['setting_surat']->logo_kiri = url('assets/images/web/'.$result['setting_surat']->logo_kiri);
		};

		if (!is_null($result['setting_surat']->watermark)) {
			$result['setting_surat']->watermark = url('assets/images/web/'.$result['setting_surat']->watermark);
		};
		return $this->sendResponseOk($result);
    }
    
    public function update(request $request, $id) {

        $result = M_SettingSurat::where('id', $id)->first();

		if($request->file('logo_kanan')){
			
			$originalImage  = $request->file('logo_kanan');
			$imageFile      = Image::make($originalImage);
			$originalPath   = public_path('/assets/images/web/');
			$time           = time();
			$image_path     = $originalPath.$result->logo_kanan;

			if(!is_dir($originalPath)) {
				mkdir($originalPath, 0755, true);
			}
			
			if(file_exists($image_path)) {
				@unlink($image_path);
			}
		
	        $imageFile->save($originalPath.$time.$originalImage->getClientOriginalName());
	        $imageRight = $time.$originalImage->getClientOriginalName();
		}else{
			$imageRight = $result->logo_kanan;
        }
        
        if($request->file('logo_kiri')){
			
			$originalImage  = $request->file('logo_kiri');
			$imageFile      = Image::make($originalImage);
			$originalPath   = public_path('/assets/images/web/');
			$time           = time();
			$image_path     = $originalPath.$result->logo_kiri;

			if(!is_dir($originalPath)) {
				mkdir($originalPath, 0755, true);
			}
			
			if(file_exists($image_path)) {
				@unlink($image_path);
			}
		
	        $imageFile->save($originalPath.$time.$originalImage->getClientOriginalName());
	        $imageLeft = $time.$originalImage->getClientOriginalName();
		}else{
			$imageLeft = $result->logo_kiri;
		}

		if($request->file('watermark')){
			
			$originalImage  = $request->file('watermark');
			$imageFile      = Image::make($originalImage);
			$originalPath   = public_path('/assets/images/web/');
			$time           = time();
			$image_path     = $originalPath.$result->watermark;

			if(!is_dir($originalPath)) {
				mkdir($originalPath, 0755, true);
			}
			
			if(file_exists($image_path)) {
				@unlink($image_path);
			}
		
	        $imageFile->save($originalPath.$time.$originalImage->getClientOriginalName());
	        $imageWatermark = $time.$originalImage->getClientOriginalName();
		}else{
			$imageWatermark = $result->watermark;
		}

		$input = M_SettingSurat::where('id', $id)->update([
			'kop_surat_1'   => $request->kop_surat_1,
			'kop_surat_2'   => $request->kop_surat_2,
			'kop_surat_3'   => $request->kop_surat_3,
			'kop_surat_4'   => $request->kop_surat_4,
			'logo_kanan'    => $imageRight,
			'logo_kiri'     => $imageLeft,
			'watermark'     => $imageWatermark,
		]);
		return $this->sendResponseUpdate($request->watermark);
	}
}
