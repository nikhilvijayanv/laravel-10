<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return app('Arr')->only(config('app'), [
        'name',
        'env',
        'debug',
        'url',
        'asset_url',
        'locale',
        'timezone',
    ]);
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
