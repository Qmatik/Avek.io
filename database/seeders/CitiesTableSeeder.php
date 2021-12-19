<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\CitiesRepository;
use Database\Factories\CitiesFactory;

class CitiesTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 100;

    public function __construct(protected CitiesFactory $factory, protected CitiesRepository $repository)
    {
    }
}
