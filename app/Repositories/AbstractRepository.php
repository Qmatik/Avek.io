<?php
declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

/**
 * @mixin Builder
 */
abstract class AbstractRepository
{
    public function __construct(protected DatabaseManager $database)
    {
    }

    public function query(): Builder
    {
        /* @phpstan-ignore-next-line */
        return $this->database->connection(static::CONNECTION)->table(static::TABLE);
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->query()->{$name}(...$arguments);
    }
}
