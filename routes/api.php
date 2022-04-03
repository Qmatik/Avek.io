<?php
declare(strict_types=1);

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DisabledProductsController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TradingNetworksController;
use App\Http\Controllers\TradingPointSchedulesController;
use App\Http\Controllers\TradingPointsController;
use App\Http\Controllers\UsersController;
use App\Services\Decorators\Router;

/** @var Router $router */
$router->resource('cities', CitiesController::class);
$router->resource('disabled-products', DisabledProductsController::class);
$router->resource('product-categories', ProductCategoriesController::class);
$router->resource('products', ProductsController::class);
$router->resource('trading-networks', TradingNetworksController::class);
$router->resource('trading-point-schedules', TradingPointSchedulesController::class);
$router->resource('trading-points', TradingPointsController::class);
$router->resource('users', UsersController::class);
