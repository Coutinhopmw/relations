<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Buscando todos os usuários.
Route::get('/users',[UserController::class, 'index']);
Route::get('/addresses',[AddressController::class, 'index']);

// Buscado um usuário específico através do id.
Route::get('/users/{id}',[UserController::class, 'index']);
Route::get('/addresses/{id}',[AddressController::class, 'index']);


// Cadastrar um novo usuário
Route::post('/',[UserController::class,'insert']);

//Cadastrar um novo endereço

Route::post('/addresses',[AddressController::class, 'insert']);

//Invoices
Route::get('/invoices',[InvoiceController::class,'index']);
Route::post('/invoices',[InvoiceController::class,'createInvoice']);
Route::get('/invoices{id}',[InvoiceController::class,'findOne']);