<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function random(Request $request){
        $user = User::create([
            'name' => 'ahmed',
            'email' => 'ahmed1@example.com',
            'password' => bcrypt('password'),
        ]);
    return $user;
    }

    public function register(Request $request){
        $Newuser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    return $Newuser;
    }

    public function login(Request $request){
        $user = User::where('email', $request->input('email'))->first();

        if (!$user){
        return response()->json(['message' => 'Invalid email or password'], 401);
        }

        if (!Hash::check($request->input('password'), $user->password)){
        return response()->json(['message' => 'Invalid email or password'], 401);
        }

        $token = $user->createToken('auth_token');
        return response()->json (['token' => $token->plainTextToken]);
        }
    }

