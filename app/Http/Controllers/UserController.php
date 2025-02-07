<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = new User($data);
        $user->save();

        if($user){
            return response()->json([
                'message' => 'Uspješna registracija',
                'user' => $user
            ], 201);

        }else{
            return response()->json([
                'message' => 'Greška pri registraciji'
            ], 400);
        }
    }

    public function login (LoginRequest $request){

        $data = $request->validated();

        if(!Auth::attempt($data)){
            return response()->json([
                'message' => 'Pogrešan email ili lozinka'
            ], 400);
        }

        $user = User::where('email', $data['email'])->first();

        if ($user && Hash::check($data['password'], $user->password)){
                $token = $user->createToken('token')->plainTextToken;
                return response()->json([
                    'message' => 'Uspješna prijava',
                    'token' => $token
                ], 200);
        }else{
            return response()->json([
                'message' => 'Pogrešna lozinka'
            ], 400);
        }
}


    public function getUserData(Request $request)
{
    if ($request->user()) {
        return response()->json($request->user());
    } else {
        return response()->json(['message' => 'User not authenticated'], 401);
    }
}

public function logout(Request $request)
{
    // Provjera je li korisnik prijavljen
    if ($request->user()) {
        // Dohvati korisnika i obriši njegove tokene
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json(['message' => 'Uspješno ste se odjavili'], 200);
    }

    return response()->json(['message' => 'Neprihvaćeni zahtjev'], 400);
}

}
