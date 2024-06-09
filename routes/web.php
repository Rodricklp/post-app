<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'bienvenido', ['name' => 'Liza'])->name('welcome.index');

Route::resource('/post', PostController::class);
