<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    public function login(Request $request){
        $userData = Validator::make(
        $request->all(),
        [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($userData->fails()) {
            return response()->json($userData->errors(), 422);

        }

        $credentials = $request->only('email', 'password');
        if (!Auth()->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda Salah'
            ], 401);
        }
        $user = Auth::user();
        $token = $user->createToken('appKu')->accessToken;
        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $token
        ], 200);
    }
    public function check(Request $request){

    }
    public function logout(Request $request){

    }
}
