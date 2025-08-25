<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create-user' , [Usercontroller::class,'create'])->name('users.create');

Route::post('/store-user' , [Usercontroller::class,'store'])->name('users.store');
