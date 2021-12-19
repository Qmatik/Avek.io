<?php
declare(strict_types=1);

namespace Database\Factories;

class ProductsFactory extends AbstractFactory
{
    public function generate(): array
    {
        return [
            'name' => $this->faker->text(100),
        ];
    }
}
