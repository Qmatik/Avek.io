<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\ProductCategoriesRepository;
use App\Repositories\Core\ProductsRepository;
use Database\Factories\ProductsFactory;

class ProductsTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 10;

    public function __construct(
        protected ProductsFactory $factory,
        protected ProductsRepository $repository,
        protected ProductCategoriesRepository $categoriesRepository
    ) {
    }

    public function run(): void
    {
        $this->categoriesRepository->get()->each(function (object $category) {
            $data = [];

            for ($i = 1; $i <= static::COUNT; $i++) {
                $data[] = $this->factory->make([
                    'product_category_id' => $category->id,
                ]);
            }

            $this->repository->insert($data);
        });
    }
}
