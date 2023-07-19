<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
        $dataValidate = $request->validate([
            "username" => 'required',
            "password" => 'required',
        ]);

        if ($dataValidate) {
            if (Auth::attempt($dataValidate)) {
                return $request->user()->createToken('token', ['server:update'])->plainTextToken;
            } else {
                return response("Email atau Password yang anda masukan salah", 401);
            }
        } else {
            return response("parameter yang dimasukan salah", 400);
        }
    }

    public function logout(Request $request)
    {
        $validate = $request->user()->currentAccessToken()->delete();
        if ($validate) {
            return response("success", 200);
        } else {
            return response("token expired", 402);
        }
    }
}
