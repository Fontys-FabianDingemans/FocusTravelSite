<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->generateTokenString();
            return response()->json([
                'message' => 'User logged in',
                'token' => $token
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6|same:password'
        ]);

        $credentials = $request->only('email', 'password', 'password_confirm');

        $user = User::query()
            ->where('email', $credentials['email'])
            ->first();
        if ($user){
            return response()->json([
                'message' => 'Email already exists'
            ], 401);
        }

        $user = User::query()
            ->create([
                'email' => $credentials['email'],
                'password' => bcrypt($credentials['password'])
            ]);

        $token = $user->generateTokenString();

        return response()->json([
            'message' => 'User registered',
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        $user = $request->user;
        if (!$user){
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->update([
            'account_token' => null
        ]);

        return response()->json([
            'message' => 'User logged out'
        ], 200);
    }


}
