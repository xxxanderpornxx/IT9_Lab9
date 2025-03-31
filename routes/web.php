<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;



Route::get('/homepage', function () {
    return view('homepage');
});


Route::post('/homepage', [FormController::class, 'submit']);

Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

Route::get('/users', [UserController::class, 'index']);