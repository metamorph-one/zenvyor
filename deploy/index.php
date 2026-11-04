<?php

define('LARAVEL_START', microtime(true));

// Caminho para o checkout do repositório Git no cPanel (~/repositories/zenvyor)
$repo = dirname(__DIR__) . '/repositories/zenvyor';

if (file_exists($status = $repo.'/storage/framework/maintenance.php')) {
    require $status;
}

require $repo.'/vendor/autoload.php';

(require_once $repo.'/bootstrap/app.php')
    ->handleRequest(Illuminate\Http\Request::capture());
