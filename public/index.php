<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)
    ->handle(Request::capture());

$host = '0.0.0.0';
$port = env('PORT', 8080);  // Ambil nilai PORT dari Railway, default ke 8080 jika tidak ada

// Menggunakan Laravel built-in server (jika perlu)
if (env('APP_ENV') === 'local') {
    Artisan::call('serve', [
        '--host' => $host,
        '--port' => $port
    ]);
}