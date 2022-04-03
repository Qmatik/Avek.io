<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\DisabledProductsRepository;

class DisabledProductsController extends AbstractResourceController
{
    public function __construct(DisabledProductsRepository $repository)
    {
        $this->repository = $repository;
    }
}
