<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api as Controller;
use App\Models\Dashboard\CeklistKendaraan as M_CeklistKendaraan;
use Illuminate\Http\Request;
use Validator;
use Str;
use Carbon\Carbon;


class CeklistKendaraan extends Controller
{

	public function index(Request $request){
		
		$year 		= $request->input('year'); if ($year == ''){$year = 'IS NOT NULL'; }else {$year = '= '.$year;}; 
		$draw 		= $request->input('draw');
		$offset		= $request->input('start'); if ($offset == ''){$offset = 0; };
		$limit		= $request->input('length'); if ($limit == ''){$limit = 25; };
		$search		= $request->input('search')['value']; if ($search == ''){$search = ''; };		
		$order		= $request->input('order')[0]['column']; 
		$sort 		= $request->input('order')[0]['dir']; if ($sort == ''){$sort = 'DESC'; };
		$columns	= $request->input('columns')[$order]['data'];  if ($columns == ''){$columns = 'id'; }elseif($columns == 'nama_penerima'){$columns = 'nama_penerima'; };
		
		$data 	= M_CeklistKendaraan::orderBy($columns, $sort)
					->whereRaw('Year(`created_at`)'.$year)
					->where('nama_penerima', 'like', '%'.$search.'%')
					->offset($offset)
					->limit($limit)
					->get();
					
		$total  = M_CeklistKendaraan::where('nama_penerima', 'like', '%'.$search.'%')
					->whereRaw('Year(`created_at`) '.$year)
					->count();			
		
		$result['draw']           = $draw ;
		$result['recordsTotal']   = $total;
		$result['recordsFiltered']= $total;
		$result['data'] = $data;
		return $this->sendResponseOk($result);
	}
	
	public function view($id){
		$result          = M_CeklistKendaraan::find($id);
		
		if (is_null($result)) {
		   $message 	= 'Your request couldn`t be found';
		   return $this->sendError($message);
		}

		return $this->sendResponseOk($result);

	}

	public function save_header(request $request){
		
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'tanggal' => 'required',
            'jenis_towing' => 'required',
            'dari_tujuan' => 'required',
            'nama_driver' => 'required',
            'hp_driver' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponseError(json_encode($validator->errors()), $validator->errors());       
        }
		
		$input          = M_CeklistKendaraan::create([
		'nomor'       		=> $request->nomor,
		'tanggal'          	=> $request->tanggal,
		'jenis_towing' 		=> $request->jenis_towing,
		'dari_tujuan'   	=> $request->dari_tujuan,
		'nama_driver'      	=> $request->nama_driver,
		'hp_driver'   		=> $request->hp_driver,
		]);
		
		if($input){
			return $this->sendResponseCreate($input);
		}
		
	}

	public function update_header(request $request, $id){
		
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'tanggal' => 'required',
            'jenis_towing' => 'required',
            'dari_tujuan' => 'required',
            'nama_driver' => 'required',
            'hp_driver' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError(json_encode($validator->errors()), $validator->errors());       
        }
		
		$input         	    = M_CeklistKendaraan::where('id', $id)->update([
		'nomor'       		=> $request->nomor,
		'tanggal'          	=> $request->tanggal,
		'jenis_towing' 		=> $request->jenis_towing,
		'dari_tujuan'   	=> $request->dari_tujuan,
		'nama_driver'      	=> $request->nama_driver,
		'hp_driver'   		=> $request->hp_driver,
		]);
		
		if($input){
			return $this->sendResponseUpdate($input);
		}else{
			return $this->sendResponseError('Nothing is change');
		}
		
	}

	public function update_checklistform(request $request, $id){
		
        $validator = Validator::make($request->all(), [
            'nama_pengirim' => 'required',
            'alamat_pengirim' => 'required',
            'tlp_pengirim' => 'required',
            'nama_penerima' => 'required',
            'alamat_penerima' => 'required',
			'hp_penerima' => 'required',
			'jenis_kendaraan' => 'required',
			'nopol_kendaraan' => 'required',
			'no_rangka' => 'required',
			'no_mesin' => 'required',
			'warna_kendaraan' => 'required',
			'kondisi_unit' => 'required',
			'catatan' => 'required',
			'kilometer' => 'required',
			'bahan_bakar' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponseError(json_encode($validator->errors()), $validator->errors());       
        }
		
		$input = M_CeklistKendaraan::where('id', $id)->update([
		'nama_pengirim'       		=> $request->nama_pengirim,
		'alamat_pengirim'          	=> $request->alamat_pengirim,
		'tlp_pengirim' 				=> $request->tlp_pengirim,
		'nama_penerima'   			=> $request->nama_penerima,
		'alamat_penerima'      		=> $request->alamat_penerima,
		'hp_penerima'   			=> $request->hp_penerima,
		'jenis_kendaraan'   		=> $request->jenis_kendaraan,
		'nopol_kendaraan'   		=> $request->nopol_kendaraan,
		'no_rangka'   				=> $request->no_rangka,
		'no_mesin'   				=> $request->no_mesin,
		'warna_kendaraan'   		=> $request->warna_kendaraan,
		'kondisi_unit'   			=> $request->kondisi_unit,
		'catatan'   				=> $request->catatan,
		'ac'   						=> $request->ac,
		'antena'   					=> $request->antena,
		'asbak'   					=> $request->asbak,
		'ban_serep'   				=> $request->ban_serep,
		'buku'   					=> $request->buku,
		'dongkrak'   				=> $request->dongkrak,
		'dop_roda'   				=> $request->dop_roda,
		'spion_luar'   				=> $request->spion_luar,
		'spion_dalam'   			=> $request->spion_dalam,
		'karpet_depan'   			=> $request->karpet_depan,
		'karpet_tengah'   			=> $request->karpet_tengah,
		'karpet_belakang'   		=> $request->karpet_belakang,
		'kotak_p3k'   				=> $request->kotak_p3k,
		'klakson'   				=> $request->klakson,
		'kunci_kontak'   			=> $request->kunci_kontak,
		'lighter'   				=> $request->lighter,
		'penahan_lumpur'   			=> $request->penahan_lumpur,
		'radio'   					=> $request->radio,
		'sabuk_pengaman'   			=> $request->sabuk_pengaman,
		'sandaran_kepala'   		=> $request->sandaran_kepala,
		'segitiga_pengaman'   		=> $request->segitiga_pengaman,
		'stnk'   					=> $request->stnk,
		'talang_air'   				=> $request->talang_air,
		'tool_set'   				=> $request->tool_set,
		'wiper_depan'   			=> $request->wiper_depan,
		'wiper_belakang'   			=> $request->wiper_belakang,
		'kilometer'   				=> $request->kilometer,
		'bahan_bakar'   			=> $request->bahan_bakar,
		]);
		
		if($input){
			return $this->sendResponseUpdate($input);
		}else{
			return $this->sendResponseError('Nothing is change');
		}
		
	}

	public function generate_url(request $request){
		$id = $request->id;
		//$get          = M_CeklistKendaraan::where('id', $id)->first();

		// $unix_url		 = $get->unix_url;
		// $unix_url		 = Str::substr($unix_url, 17, 10);
		// $start		     = Carbon::createFromTimestamp($unix_url);
		// $end 			 = Carbon::now()->addDay();
		// $dif 			 = $start->diffInDays($end);
		// if($dif >= 1){

		// }
		$generate = $this->quickRandom();
		$input         	    = M_CeklistKendaraan::where('id', $id)->update([
			'unix_url'       => $generate,
			]);

		
		if($input){
			$data['unix_url'] = url('temp/'.$generate);
			return $this->sendResponseCreate($data);
		}

	}

	public static function quickRandom($length = 16)
	{
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$start  = substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
		$end  = substr(str_shuffle(str_repeat($pool, 5)), 0, 2);
		$timestamp =  Carbon::now()->timestamp;
		return $start.'-'.$timestamp.$end;
	}

}