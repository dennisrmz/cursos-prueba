<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        /* return env('APP_URL') . '/oauth/token'; */

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post(env('APP_URL') . '/oauth/token', [
            'grant_type' => 'password',
            'client_id' => $request->client_id,
            'client_secret' => $request->client_secret,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $data = $response->json();

        if ($response->status() === 200) {

            $user = User::where('email', $request->username)->first();

            return response()->json([
                'user' => $user,
                'token' => $data,
            ], 200);

        }else{
            return response()->json($data, $response->status());
        }

        /* return $response->status(); */

        /* return $response->json();

        return response()->json($response, 200); */

        /* return response()->json([
            'message' => 'You are logged in!'
        ], 200); */
    }
}
