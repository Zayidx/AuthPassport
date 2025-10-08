<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $userData = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if ($userData->fails()) {
            return response()->json($userData->errors(), 422);
        }

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda Salah',
            ], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('appKu')->accessToken;

        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function check(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated',
            ], 401);
        }

        $user = Auth::guard('api')->user();

        return response()->json([
            'success' => true,
            'data' => [
                'user' => $user,
            ],
        ], 200);
    }

    public function logout(Request $request)
    {
        $auth = auth('api');
        try {
            if ($auth->check()) {
                $auth->user()->token()->revoke();
                $auth->user()->token()->delete();
                $pesan = [
                    'status' => true,
                    'pesan' => 'Logout Berhasil',
                ];
                $code = 200;
            } else {
                $pesan = [
                    'status' => false,
                    'pesan' => 'Sedang tidak login',
                ];
                $code = 401;

            }


              
           
        }
        catch (\Exception $e) {
            $pesan = [
                'status' => false,
                'pesan' => 'Gagal Logout',
            ];
            $code = 500;
        }
        return response()->json($pesan, $code);
    }
}
