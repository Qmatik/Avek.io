<?php
declare(strict_types=1);

namespace App\Repositories\Core;

use App\Repositories\AbstractRepository;

abstract class CoreAbstractRepository extends AbstractRepository
{
    protected const CONNECTION = 'core';
}
