<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard as Controller;
use \App\Models\Dashboard\SettingSurat as M_SettingSurat;
use \App\Models\Dashboard\SettingPeraturan as M_SettingPeraturan;
use \App\Models\Dashboard\SettingCabang as M_SettingCabang;
use \App\Models\Dashboard\Setting as M_Setting;
use Image;
class Setting extends Controller
{
    //
	public function index(){
		
		$dataSurat = M_SettingSurat::get();
		$data_peraturan = M_SettingPeraturan::get();
		$data_cabang = M_SettingCabang::get();
		
		$data['title']   = 'Website Setting';
		$data['user']    = $this->user();
		return view('backend.content.setting',compact('data'), ['dataSurat' => $dataSurat, 'data_peraturan' => $data_peraturan, 'data_cabang' => $data_cabang]);
	}

	public function create(Request $request){
		
        M_SettingSurat::create([
			'kop_surat_1' => $request['kop_surat_1'],
			'kop_surat_2' => $request['kop_surat_2'],
			'kop_surat_3' => $request['kop_surat_3'],
			'kop_surat_4' => $request['kop_surat_4'],
			'logo_kanan' => $request['logo_kanan'],
			'logo_kiri' => $request['logo_kiri'],
		]);

		$countPeraturan = count($request->peraturan);

		$incrementPeraturan = 1;
		for ($i=0; $i < $countPeraturan; $i++) { 
			$input  = M_SettingPeraturan::create([
					'nomor' => $request->nomor[$i],
					'isi' => $request->peraturan[$i],
			]);
			$incrementPeraturan++;
		}

		$countCabang = count($request->daerah);
		$incrementCabang = 1;
		for ($i=0; $i < $countCabang; $i++) { 
			M_SettingCabang::create([
					'daerah' => $request->daerah[$i],
					'jalan' => $request->jalan[$i],
			]);
			$incrementCabang++;
		}
		
		if($input){
			return $this->sendResponseCreate($input);
		}

	}

	public function Api()
	{
		$result['global_setting'] = M_Setting::first();
		$result['kop_surat'] = M_SettingSurat::first();
		$result['peraturan'] = M_SettingPeraturan::get();
		$result['cabang'] = M_SettingCabang::get();
		if (!is_null($result['global_setting']->logo)) {
			$result['global_setting']->logo = url('assets/images/web/'.$result['global_setting']->logo);
		};
		return $this->sendResponseOk($result);
	}

	public function update(request $request, $id){
		$result = M_Setting::where('id', $id)->first();
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

		$input = M_Setting::where('id', $id)->update([
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
		]);
		return $this->sendResponseUpdate(null);
	}
	
	public function updateMap(request $request, $id){	

		$input = M_Setting::where('id', $id)->update([
		'maps'       => $request->maps,
		]);
		return $this->sendResponseUpdate(null);
	}

	public function delete_peraturan($id){	

		$input = M_SettingPeraturan::where('id', $id)->delete();
		return $this->sendResponseDelete(null);
	}

	public function delete_cabang($id){	

		$input = M_SettingCabang::where('id', $id)->delete();
		return $this->sendResponseDelete(null);
	}

}
