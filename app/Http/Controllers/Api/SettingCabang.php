<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api as Controller;
use \App\Models\Dashboard\SettingCabang as M_SettingCabang;
use Illuminate\Http\Request;

class SettingCabang extends Controller
{
	public function list($params) {

		if ($params == "default") {
			$result['setting_cabang'] = M_SettingCabang::get();
		} else {
			$result['setting_cabang'] = M_SettingCabang::groupBy('daerah')->get();
		}
		return $this->sendResponseOk($result);
    }
    
    public function update(request $request) {

		$countPeraturan = count($request->input('id_cabang'));
		for ($i=0; $i < $countPeraturan; $i++) {
			if ($request->input('id_cabang')[$i] != "NewRowCabang") {
				$input  = M_SettingCabang::where('id', $request->input('id_cabang')[$i])->update([
						'daerah' => $request->input('daerah')[$i],
						'jalan' => $request->input('jalan')[$i],
				]);
			} else {
				$input  = M_SettingCabang::create([
						'daerah' => $request->input('daerah')[$i],
						'jalan' => $request->input('jalan')[$i],
				]);
			}
		}
		return $this->sendResponseUpdate(null);
	}

	public function delete($id){	

		$input = M_SettingCabang::where('id', $id)->delete();
		return $this->sendResponseDelete(null);
		
	}
}
