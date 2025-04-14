<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// agregando un comentario
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
