<?php

use Illuminate\Support\Facades\Route;

# Home
Route::get('/', function () {
    $res = [];

    $res['config.app'] = app('Arr')::only(config('app'), [
        'name',
        'env',
        'debug',
        'url',
        'asset_url',
        'locale',
        'timezone',
    ]);

    // new php key
    $res['php'] = [
        'version' => phpversion(),
        'timezone' => date_default_timezone_get(),
    ];

    $res['other_versions'] = [
        'laravel' => app()->version(),
        // 'php' => phpversion(),
        'mysql' => app('DB')::select('select version() as version')[0]->version,
    ];

    return $res;
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
