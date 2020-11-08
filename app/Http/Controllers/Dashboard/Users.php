<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Dashboard as Controller;
use Illuminate\Http\Request;
use \App\Models\Dashboard\Users as M_Users;

class Users extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'List Users';
		$data['user']    = $this->user();
		return view('backend.content.users.usersList',compact('data'));
	}
	
	public function view(){
		
		$data['title']   = 'View Users';
		$data['user']    = $this->user();
		return view('backend.content.users.usersView',compact('data'));
	}
	
	public function add(){
		$data['title']   = 'Add Users';
		$data['user']    = $this->user();
		return view('backend.content.users.usersAdd',compact('data'));	
	}
	
	public function profile(){
		
		$data['title']   = 'User Profile';
		$data['user']    = $this->user();
		return view('backend.content.users.usersView',compact('data'));	
	}

	public function update(){
		$data['title']   = 'Update Users';
		$data['user']    = $this->user();
		return view('backend.content.users.usersAdd',compact('data'));
	}

}