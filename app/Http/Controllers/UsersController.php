<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Core\UsersRepository;

class UsersController extends AbstractResourceController
{
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }
}
