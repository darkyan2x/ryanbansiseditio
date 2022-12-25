<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){

        $post_data = $request->validate([
                'username'=>'required|string|max:255',
                'name'=>'string',
                'password'=>'required|min:8'
        ]);
 
            $user = User::create([
            'username' => $post_data['username'],
            'name' => $post_data['name'],
            'password' => Hash::make($post_data['password']),
            ]);
 
            $token = $user->createToken('authToken')->plainTextToken;
 
            return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            ]);
    }
 
    public function login(Request $request){
        if (!\Auth::attempt($request->only('username', 'password'))) {
               return response()->json([
                'message' => 'Login information is invalid.'
              ], 401);
        }
 
        $user = User::where('username', $request['username'])->firstOrFail();
                $token = $user->createToken('authToken')->plainTextToken;
 
            return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            ]);
    }
}
