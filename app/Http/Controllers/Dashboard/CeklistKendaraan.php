<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard as Controller;
use App\Models\Dashboard\CeklistKendaraan as M_CeklistKendaraan;
use \App\Models\Dashboard\SettingSurat as M_SettingSurat;
use \App\Models\Dashboard\SettingCabang as M_SettingCabang;
use \App\Models\Dashboard\SettingPeraturan as M_SettingPeraturan;
use DB;
use PDF;
class CeklistKendaraan extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Ceklist Kendaraan';
		$data['user']    = $this->user();
		return view('backend.content.ceklistKendaraan.list',compact('data'));
	}
	
	public function view($id){
		
		$data['result']          = M_CeklistKendaraan::find($id);

		$data['title']   = 'Open Detail Ceklist Kendaraan';
		$data['user']    = $this->user();
		return view('backend.content.ceklistKendaraan.view',compact('data'));
	}
	
	public function create(){
		
		
		$data['title']   = 'Add Ceklist Kendaraan';
		$data['user']    = $this->user();
		return view('backend.content.ceklistKendaraan.add',compact('data'));	
	}
	
	public function update($id){
		
		$data['title']   = 'Update Ceklist Kendaraan';
		$data['user']    = $this->user();
		return view('backend.content.ceklistKendaraan.add',compact('data'));
	}
	
	public function downloadPdf() {
		// $surat = M_SettingSurat::first();
		// $peraturan = M_SettingPeraturan::get();
		// $cabang = M_SettingCabang::groupBy('daerah')->get();
		$data['result']          = M_CeklistKendaraan::get();
		$surat = DB::table('kop_surat')->get();
        $peraturan = DB::table('peraturan')->get();
        $data_cabang = DB::table('cabang')->select('id','jalan', 'daerah')->groupBy('daerah')->get();	

		$cabang = array();
        foreach ($data_cabang as $value) {
            $cabang[] = array('daerah' => $value->daerah,
                                'jalan' => DB::table('cabang')->select('jalan', 'daerah')->where('daerah', $value->daerah)->get());
          
        }
		
		$pdf = PDF::loadView('backend.content.ceklistKendaraan.pdf', ['alldata' => $data['result'],'data' => $surat, 'data_peraturan' => $peraturan, 'data_cabang' => $cabang]);
        return $pdf->stream('welcome.pdf');
	}
}
