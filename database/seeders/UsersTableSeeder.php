<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Repositories\Core\CitiesRepository;
use App\Repositories\Core\UsersRepository;
use Database\Factories\UsersFactory;

class UsersTableSeeder extends AbstractTableSeeder
{
    protected const COUNT = 10;

    public function __construct(
        protected UsersFactory $factory,
        protected UsersRepository $repository,
        protected CitiesRepository $citiesRepository
    ) {
    }

    public function run(): void
    {
        $this->createAdminUser();
        $this->createClientUser();
        $this->createWorkers();
    }

    private function createAdminUser(): void
    {
        $this->repository->insert($this->factory->make([
            'role' => $this->repository::ROLE_ADMIN,
        ]));
    }

    private function createClientUser(): void
    {
        $this->repository->insert($this->factory->make([
            'role' => $this->repository::ROLE_CLIENT,
        ]));
    }

    private function createWorkers(): void
    {
        $this->citiesRepository->get()->each(function (object $city) {
            $supervisorId = $this->repository->insertGetId($this->factory->make([
                'city_id' => $city->id,
                'role' => $this->repository::ROLE_SUPERVISOR,
            ]));

            $data = [];

            for ($i = 1; $i <= static::COUNT; $i++) {
                $data[] = $this->factory->make([
                    'city_id' => $city->id,
                    'supervisor_id' => $supervisorId,
                    'role' => $this->repository::ROLE_MERCHANDISER,
                ]);
            }

            $this->repository->insert($data);
        });
    }
}
