<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api as Controller;
use \App\Models\Dashboard\SettingPeraturan as M_SettingPeraturan;
use Illuminate\Http\Request;

class SettingPeraturan extends Controller
{
    public function index() {

		$result['setting_peraturan'] = M_SettingPeraturan::get();
		return $this->sendResponseOk($result);
		
    }
    
    public function update(request $request) {

		$countPeraturan = count($request->input('id_peraturan'));
		for ($i=0; $i < $countPeraturan; $i++) {
			if ($request->input('id_peraturan')[$i] != "newRowPeraturan") {

				$input  = M_SettingPeraturan::where('id', $request->input('id_peraturan')[$i])->update([
						'nomor' => $request->input('nomor')[$i],
						'isi' => $request->input('isi')[$i],
				]);

			} else {

				$input  = M_SettingPeraturan::create([
						'nomor' => $request->input('nomor')[$i],
						'isi' => $request->input('isi')[$i],
				]);
					
			}
		}
		return $this->sendResponseUpdate(null);
	}

	public function delete($id){	

		$input = M_SettingPeraturan::where('id', $id)->delete();
		return $this->sendResponseDelete(null);

	}
}
