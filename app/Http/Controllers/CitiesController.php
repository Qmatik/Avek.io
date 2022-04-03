<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\CitiesRepository;

class CitiesController extends AbstractResourceController
{
    public function __construct(CitiesRepository $repository)
    {
        $this->repository = $repository;
    }
}
