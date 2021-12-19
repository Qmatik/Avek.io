<?php
declare(strict_types=1);

namespace Database\Factories;

class CitiesFactory extends AbstractFactory
{
    public function generate(): array
    {
        return [
            'name' => $this->faker->unique->city
        ];
    }
}
