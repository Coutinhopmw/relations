<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Buscando todos os usuários.
Route::get('/users',[UserController::class, 'index']);
Route::get('/addresses',[AddressController::class, 'index']);

// Buscado um usuário específico através do id.
Route::get('/users/{id}',[UserController::class, 'index']);
Route::get('/addresses/{id}',[AddressController::class, 'index']);
