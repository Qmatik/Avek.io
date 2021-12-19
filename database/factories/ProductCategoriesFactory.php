<?php
declare(strict_types=1);

namespace Database\Factories;

class ProductCategoriesFactory extends AbstractFactory
{
    public function generate(): array
    {
        return [
            'name' => $this->faker->unique->text(100),
        ];
    }
}
