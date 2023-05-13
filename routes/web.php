<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# Local environment only
if (app()->environment('local')) {
    Route::get('/phpinfo', function () {
        phpinfo();
    });
}