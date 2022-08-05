<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function register(Request $request) {
    	$fields = $request->validate([
    		'name' => 'required|string',
    		'username' => 'required|string|unique:users,username',
    		'email' => 'required|string|unique:users,email',
    		'password' => 'required|string|confirmed'
    	]);

    	$user = User::create([
    		'name' => $fields['name'],
    		'username' => $fields['username'],
    		'email' => $fields['email'],
    		'password' => bcrypt($fields['password'])
    	]);

    	$token = $user->createToken('myapptoken')->plainTextToken;

    	$response = [
    		'user' => $user,
    		'token' => $token
    	];

    	return response($response, 201);
    }

    public function login(Request $request) {
    	$fields = $request->validate([
    		'email' => 'required|string',
    		'password' => 'required|string'
    	]);

    	//Check Email

    	$user = User::where('email', $fields['email'])->first();

    	// Check Password

    	if(!$user || !Hash::check($fields['password'], $user->password)) {
    		return response([
    			'message' => 'Bad Creds'
    		], 401);
    	}

    	$token = $user->createToken('myapptoken')->plainTextToken;

    	$response = [
    		'user' => $user,
    		'token' => $token
    	];

    	return response($response, 201);
    }

    public function logout(Request $request) {
    	auth()->user()->tokens()->delete();

    	return [
    		'message' => 'Logged out'
    	];
    }
}
