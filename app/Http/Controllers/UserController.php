<?php

namespace App\Http\Controllers;

use App\Models\SexEnum;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function getMe(Request $request)
    {
        $user = $request->user;
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'message' => 'User found',
            'user' => $user
        ], 200);
    }

    public function updateMe(Request $request)
    {
        $user = $request->user;
        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $request->validate([
            'firstname' => 'nullable|string',
            'middlename' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|email',
            'date_of_birth' => 'nullable|date',
            'profile_picture_url' => 'nullable|url',
            'sex' => ['nullable', Rule::enum(SexEnum::class)],
        ]);

        $user->update($request->except('account_verified', 'account_token'));

        return response()->json([
            'message' => 'User updated',
            'user' => $user
        ], 200);
    }

}
