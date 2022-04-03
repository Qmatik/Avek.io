<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\TradingPointSchedulesRepository;

class TradingPointSchedulesController extends AbstractResourceController
{
    public function __construct(TradingPointSchedulesRepository $repository)
    {
        $this->repository = $repository;
    }
}
