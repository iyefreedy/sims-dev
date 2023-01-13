<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        $request->validated();

        if (!Auth::attempt($request->all())) {
            return response([
                'message' => 'Kredensial tidak cocok',
            ]);
        }

        $user = Auth::user();

        return response([
            'message' => 'login successfull',
            'user' => $user,
            'token' => $user->createToken($user->id)->plainTextToken,
        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return response(['message' => 'Logout success']);
    }
}