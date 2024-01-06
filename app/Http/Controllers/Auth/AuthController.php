<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|users:unique|max:255',
        //     'passowrd' => 'required|string|min:8'
        // ]);
        // if($validator->fails()){
        //     return response()->json($validator->errors());
        // }
        // Crear nuevo usuario
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        // Generar token de acceso
        $token = $user->createToken('shopy')->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token, 'token_type' => 'Bearer'], 201);
    }

    
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('shopy')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    private function validator(Request $request){
        
        return $validator;
    }
}
