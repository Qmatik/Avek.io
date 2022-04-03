<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\ProductsRepository;

class ProductsController extends AbstractResourceController
{
    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }
}
