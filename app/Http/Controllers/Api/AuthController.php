<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User as User;

class AuthController extends Controller
{
		public function login(Request $request)
		{
		  
		    // $request->validate([
				// 'email'       => 'required|string|email',
				// 'password'    => 'required|string',
				// 'remember_me' => 'boolean'
			// ]);

			// $credentials = request(['email', 'password']);

			// if(!Auth::attempt($credentials))
				// return response()->json([
					// 'message' => 'Unauthorized'
				// ], 401);
			
			
		  try {
			
			$request->validate([
			  'email' => 'email|required',
			  'password' => 'required'
			]);
			
			$credentials = request(['email', 'password']);
			if (!Auth::attempt($credentials)) {
			  return response()->json([
				'status_code' => 500,
				'message' => 'Unauthorized'
			  ]);
			}
			
			$user = User::where('email', $request->email)->first();
			if ( ! Hash::check($request->password, $user->password, [])) {
			   throw new \Exception('Error in Login');
			}
			$tokenResult = $user->createToken('authToken')->plainTextToken;
			return response()->json([
			  'status_code' => 200,
			  'access_token' => $tokenResult,
			  'token_type' => 'Bearer',
			]);
		  } catch (Exception $error) {
			return response()->json([
			  'status_code' => 500,
			  'message' => 'Error in Login',
			  'error' => $error,
			]);
		  }
		  
		}
}
