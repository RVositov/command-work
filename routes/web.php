<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',function()
{
    return view('welcome');
});

Route::get('/dashboard',function()
{
    return view('dashboard');
});



Route::resource('book', BookController::class);

