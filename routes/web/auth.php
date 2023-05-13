<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return User::all();
})->name('login');