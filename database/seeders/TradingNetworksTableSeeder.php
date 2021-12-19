<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\TradingNetworksRepository;
use Database\Factories\TradingNetworksFactory;

class TradingNetworksTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 10;

    public function __construct(
        protected TradingNetworksFactory $factory,
        protected TradingNetworksRepository $repository
    ) {
    }
}
