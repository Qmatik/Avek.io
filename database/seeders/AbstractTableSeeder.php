<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

abstract class AbstractTableSeeder extends Seeder
{
    protected const COUNT = 1;

    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= static::COUNT; $i++) {
            $data[] = $this->factory->make();
        }

        $this->repository->insert($data);
    }
}
