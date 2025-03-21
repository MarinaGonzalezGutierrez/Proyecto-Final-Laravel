<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

// Verifica si la aplicación está en modo mantenimiento
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Carga el autoloader de Composer
require __DIR__.'/../vendor/autoload.php';

// Inicia Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// Maneja la solicitud HTTP entrante
$app->handleRequest(Request::capture());
