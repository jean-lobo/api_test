<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\User;

class LoginController extends Controller
{
             
    
    public function login(Request $req){
    
        $validator = Validator::make($req->all(), [
    
            'email' => ['required','email'],
            'password' => ['required']
            ]);
    
    
            if ($validator->fails())
            {
            return response(['errors'=>$validator->errors()->all()], 422);
            
            }
    
    
     $user = User::where('email', $req->email)->first();
    
    if(!$user || ($user->password) != ($req->password)){
    
    
    
        return response(['message' => 'The provided credentials are incorrect']);
    
    }
    
 
    
    
    $accessToken =  $user->createToken('Auth Token')->accessToken;
    
    
    return response(['access_token' => $accessToken,
'user' =>$user
]);
}

}
