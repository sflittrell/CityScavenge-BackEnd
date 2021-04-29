<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;



class UserController extends Controller
{
    public function register(Request $request) {
      Log::debug($request);
      $validated = Validator::make($request->all(), [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'password' => 'required|string|min:8',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
      ]);
      
      if($validated->fails()) {
        return response(['message' => 'Validation errors', 'errors' => $validated->errors(), 'status' => false], 422);
      }
      
      $input = $request->all();
      $input['password'] = Hash::make($input['password']);
      $user = User::create($input);
      
      $data['token'] = $user->createToken('CityScavenge')->accessToken;
      $data['user_data'] = $user;
      
      return response(['data' => $data, 'message' => 'Account created successfully', 'status' => true]);
    }
}
