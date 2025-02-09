<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/getUser', function (Request $request) {

    return response()->json($request->user()); // Vraća trenutnog prijavljenog korisnika

});

Route::middleware(['auth:sanctum', 'admin'])->get('/admin', function () {
    return response()->json(['message' => 'Dobrodošli na admin stranicu!']);
});



Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);
// Oglasi
Route::post('/dodajOglas', [JobController::class, 'dodajOglas']);
Route::get('/dohvatiOglase', [JobController::class, 'dohvatiOglase']);
Route::get('/oglas/{id}', [JobController::class, 'singleOglas']);

// Korisnik
Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);

