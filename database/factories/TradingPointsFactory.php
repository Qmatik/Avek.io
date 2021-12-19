<?php
declare(strict_types=1);

namespace Database\Factories;

class TradingPointsFactory extends AbstractFactory
{
    public function generate(): array
    {
        return [
            'address' => $this->faker->address,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
        ];
    }
}
