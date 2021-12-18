<?php
declare(strict_types=1);

namespace App\Repositories\Events;

use App\Repositories\AbstractRepository;

abstract class EventsAbstractRepository extends AbstractRepository
{
    protected const CONNECTION = 'events';
}
