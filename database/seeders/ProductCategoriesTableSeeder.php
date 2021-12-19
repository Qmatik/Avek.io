<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\ProductCategoriesRepository;
use Database\Factories\ProductCategoriesFactory;

class ProductCategoriesTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 10;

    public function __construct(
        protected ProductCategoriesFactory $factory,
        protected ProductCategoriesRepository $repository
    ) {
    }
}
