<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Laravel ' . app()->version();
});

# Auth Routes 
Route::prefix('auth')->group(base_path('routes/web/auth.php'));

# Local Environment Only
if (app()->environment('local')) {

    # PHP Info
    Route::get('/phpinfo', function () {
        phpinfo();
    });

}