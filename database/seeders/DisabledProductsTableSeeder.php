<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\DisabledProductsRepository;
use App\Repositories\Core\ProductsRepository;
use App\Repositories\Core\TradingPointsRepository;
use Database\Factories\DisabledProductsFactory;

class DisabledProductsTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 5;

    public function __construct(
        protected DisabledProductsFactory $factory,
        protected DisabledProductsRepository $repository,
        protected TradingPointsRepository $tradingPointsRepository,
        protected ProductsRepository $productsRepository
    ) {
    }

    public function run(): void
    {
        $products = $this->productsRepository->get();

        $this->tradingPointsRepository->get()->each(function (object $tradingPoint) use ($products) {
            $data = [];

            for ($i = 1; $i <= static::COUNT; $i++) {
                $data[] = $this->factory->make([
                    'trading_point_id' => $tradingPoint->id,
                    'product_id' => $products->random()->id,
                ]);
            }

            $this->repository->insert($data);
        });
    }
}
