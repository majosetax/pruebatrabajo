<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');

Route::post('/store',[CustomerController::class, 'store']);
