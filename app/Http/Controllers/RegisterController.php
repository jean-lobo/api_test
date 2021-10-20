<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\User;

class RegisterController extends Controller
{
    

    public function register(Request $req){

        $validator = Validator::make($req->all(), [
        
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|string|min:6',
       
        ]);
        
        
        
        if ($validator->fails())
        {
        return response()->json(['errors'=>$validator->errors()->all()], 401);
        
        }

        
        $user = User::create($req->toArray());
        
    
        
        // $accessToken = $user->createToken('Auth Token')->accessToken;
        
        return response([ 'user' => $user, 
        // 'access_token' => $accessToken
    ]);
        
        
        
        
    
        
        }
  
}