<?php

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->register(Jenssegers\Mongodb\MongodbServiceProvider::class);
$app->register(App\Providers\AppServiceProvider::class);
$app->register(Sentry\Laravel\ServiceProvider::class);
