<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //registers the User
    public function register(Request $request){
        //return $request->all();
       try{
         //return $request->all();
         $data = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:Users,email',
            'phone' => 'required|min:11|unique:Users,phone',
            'password' => 'required',
         ]);
         if($data->fails()){
            return response()->json(['message' => $data->messages()],400);
         }else{
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
         }
        return response()->json(['message' => 'Registration successful','success' => true],201);
       }catch(Exception $e){
        print($e);
       }
    }

    //login the User
    public function login(Request $request){
      $data = Validator::make($request->all(),[
         'email' => 'required',
         'password' => 'required',
      ]);
      $user = User::where('email',$request->email)->first();
      if(!$user || !Hash::check($request->password,$user->password)){
         return response()->json(['message'=>'Invalid Email or Password']);
      }
      $token = $user->createToken($request->email)->plainTextToken;
      return response()->json(['success'=>true, 'token'=>$token,'user'=>$user],200);
    }

     //Logout

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([

            'message' => 'success'
        ],200);
    }
    public function changepassword(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->password = Hash::make($request->password);
        $user->update();
        return response()->json(['message' => 'success']);
    }
}
