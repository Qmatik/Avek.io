<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\TradingPointsRepository;

class TradingPointsController extends AbstractResourceController
{
    public function __construct(TradingPointsRepository $repository)
    {
        $this->repository = $repository;
    }
}
