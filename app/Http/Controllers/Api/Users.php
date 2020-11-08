<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api as Controller;
use Illuminate\Http\Request;
use \App\Models\Dashboard\Users as M_Users;
use Illuminate\Support\Facades\Hash;
class Users extends Controller
{

	public function list(){
		
		$result['users'] = M_Users::get();
		return $this->sendResponseOk($result);
	}

	public function view($id){
		
		$result = M_Users::where('id', $id)->first();
		return $this->sendResponseOk($result);
	}

	public function update(request $request, $id){
		
		$result = M_Users::where('id', $id)->first();

		if ($request->password == "") {
			$realPassword = $request->old_pw;
		} else {
			$realPassword = Hash::make($request->password);
		}

		$input = M_Users::where('id', $id)->update([
			'name'   		=> $request->name,
			'username'   	=> $request->username,
			'email'   		=> $request->email,
			'address'  		=> $request->address,
			'hak_akses'    	=> $request->priviledge,
			'phone'    		=> $request->phone,
			'password'     	=> $realPassword,
		]);

		if($input){
			return $this->sendResponseCreate($input);
		}
	}

	public function create(request $request){

		$input = M_Users::create([
			'name'   		=> $request->name,
			'username'   	=> $request->username,
			'email'   		=> $request->email,
			'address'  		=> $request->address,
			'hak_akses'    	=> $request->priviledge,
			'phone'    		=> $request->phone,
			'password'     	=> Hash::make($request->password),
		]);

		if($input){
			return $this->sendResponseCreate($input);
		}
	}

	public function delete($id){	

		$input = M_Users::where('id', $id)->delete();
		if($input){
			return $this->sendResponseDelete(null);
		}
	}
}