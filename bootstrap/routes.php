<?php

/** @var Laravel\Lumen\Application $app */
$router = (new App\Services\Decorators\Router($app->router));

require_once __DIR__ . '/../routes/api.php';
