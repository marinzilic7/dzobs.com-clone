<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/dodajOglas', [JobController::class, 'dodajOglas']);
Route::get('/dohvatiOglase', [JobController::class, 'dohvatiOglase']);

