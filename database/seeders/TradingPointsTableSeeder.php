<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\CitiesRepository;
use App\Repositories\Core\TradingNetworksRepository;
use App\Repositories\Core\TradingPointsRepository;
use App\Repositories\Core\UsersRepository;
use Database\Factories\TradingPointsFactory;

class TradingPointsTableSeeder extends AbstractTableSeeder
{
    public function __construct(
        protected TradingPointsFactory $factory,
        protected TradingPointsRepository $repository,
        protected UsersRepository $usersRepository,
        protected TradingNetworksRepository $tradingNetworksRepository,
        protected CitiesRepository $citiesRepository,
    ) {
    }

    public function run(): void
    {
        $tradingNetworks = $this->tradingNetworksRepository->get();

        $this->citiesRepository->get()->each(function (object $city) use ($tradingNetworks) {
            $usersByCity = $this->usersRepository->getMerchandisersByCityId($city->id);

            $tradingNetworks->each(function (object $tradingNetwork) use ($usersByCity, $city) {
                $this->repository->insert($this->factory->make([
                    'city_id' => $city->id,
                    'user_id' => $usersByCity->random()->id,
                    'trading_network_id' => $tradingNetwork->id,
                ]));
            });
        });
    }
}
