<?php
declare(strict_types=1);

namespace Database\Factories;

class TradingPointSchedulesFactory extends AbstractFactory
{
    private const TIME_FROM_MIN = 21600;
    private const TIME_FROM_MAX = 54000;
    private const TIME_TO_MIN = 54000;
    private const TIME_TO_MAX = 64800;

    public function generate(): array
    {
        return [
            'date' => $this->faker->dateTimeThisDecade('+1 month'),
            'time_from' => date('H:i:s', rand(self::TIME_FROM_MIN, self::TIME_FROM_MAX)),
            'time_to' => date('H:i:s', rand(self::TIME_TO_MIN, self::TIME_TO_MAX)),
        ];
    }
}
