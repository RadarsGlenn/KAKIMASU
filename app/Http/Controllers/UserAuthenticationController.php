<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $pseudo = $request->input('username');
        $email = strtolower($request->input('email'));
        $password = $request->input('password');

        $user = User::create([
            'username' => $pseudo,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;


        // Autres actions nécessaires après l'enregistrement de l'utilisateur

        return redirect()->route('compte', ['username' => $pseudo]);
    }

    public function compte()
    {
        return view('compte');
    }



    public function login(Request $request)
    {
        $email = strtolower($request->input('email'));
        $password = $request->input('password');

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid login credentials'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully Logged out'
        ], 200);
    }
}