<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(TradingNetworksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TradingPointsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(DisabledProductsTableSeeder::class);
        $this->call(TradingPointSchedulesTableSeeder::class);
    }
}
