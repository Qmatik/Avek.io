<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\TradingPointSchedulesRepository;
use App\Repositories\Core\TradingPointsRepository;
use Database\Factories\TradingPointSchedulesFactory;

class TradingPointSchedulesTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 10;

    public function __construct(
        protected TradingPointSchedulesFactory $factory,
        protected TradingPointSchedulesRepository $repository,
        protected TradingPointsRepository $tradingPointsRepository
    ) {
    }

    public function run(): void
    {
        $this->tradingPointsRepository->get()->each(function (object $tradingPoint) {
            $data = [];

            for ($i = 1; $i <= static::COUNT; $i++) {
                $data[] = $this->factory->make([
                    'trading_point_id' => $tradingPoint->id,
                ]);
            }

            $this->repository->insert($data);
        });
    }
}
