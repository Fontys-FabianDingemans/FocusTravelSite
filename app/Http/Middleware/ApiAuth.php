<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $account_token = $request->header('X-Account-Token');

        if(!$account_token) {
            return response()->json([
                'message' => 'No account token provided'
            ], 401);
        }

        $user = User::query()
            ->where('account_token', $account_token)
            ->first();

        if(!$user) {
            return response()->json([
                'message' => 'Invalid account token'
            ], 401);
        }

        $request->merge([
            'user' => $user
        ]);

        return $next($request);
    }
}
