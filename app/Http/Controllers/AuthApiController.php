<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{

   public function useReg(Request $request)
   {
       
      $user= User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
            'api_token'=>Str::random(80),

       ]);
       if ($user) {

           return response()->json(['token'=>$user->api_token],200);
       }
       
   }

    public function login(Request $request)

    {
        // $request->user()->api_token;
        // return $request->user()->api_token;
        // User::where('email')
        $credentials = $request->only('email', 'password');

         if($token=Auth::guard('api')->attempt($credentials)){
            // Auth::attempt(['email' => $email, 'password' => $password])
            $this->repos_token($token);
        }
        else{
            return response()->json(['message'=>'email and pass not currect'],404);
        }
       
    }

    public function repos_token($token){
     return response()->json([
         'token'=>$token,
         
     ]);
 }
}
