<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $res = app('Arr')::only(config('app'), [
        'name',
        'env',
        'debug',
        'url',
        'asset_url',
        'locale',
        'timezone',
    ]);

    $res['versions'] = [
        'laravel' => app()->version(),
        'php' => phpversion(),
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
