<?php
declare(strict_types=1);

namespace App\Repositories\Core;

use Illuminate\Support\Collection;

class UsersRepository extends CoreAbstractRepository
{
    public const ROLE_ADMIN = 1;
    public const ROLE_CLIENT = 2;
    public const ROLE_SUPERVISOR = 3;
    public const ROLE_MERCHANDISER = 4;

    protected const TABLE = 'users';

    public function getMerchandisersByCityId(int $cityId): Collection
    {
        return $this->where('city_id', $cityId)
            ->where('role', self::ROLE_MERCHANDISER)
            ->get();
    }
}
