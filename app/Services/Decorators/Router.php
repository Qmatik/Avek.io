<?php
declare(strict_types=1);

namespace App\Services\Decorators;

use Laravel\Lumen\Routing\Router as DefaultRouter;

/**
 * @mixin DefaultRouter
 */
class Router
{
    public function __construct(private DefaultRouter $router)
    {
    }

    public function resource(string $name, string $className)
    {
        $this->router->get($name, "$className@index");
        $this->router->get("$name/{id}", "$className@show");
        $this->router->post($name, "$className@store");
        $this->router->put("$name/{id}", "$className@update");
        $this->router->delete("$name/{id}", "$className@destroy");
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->router->{$name}(...$arguments);
    }
}
