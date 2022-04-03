<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\ProductCategoriesRepository;

class ProductCategoriesController extends AbstractResourceController
{
    public function __construct(ProductCategoriesRepository $repository)
    {
        $this->repository = $repository;
    }
}
