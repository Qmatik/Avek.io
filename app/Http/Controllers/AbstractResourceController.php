<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\AbstractRepository;
use Illuminate\Http\Request;

abstract class AbstractResourceController
{
    protected AbstractRepository $repository;

    public function index(): array
    {
        return $this->repository->get()->toArray();
    }

    public function show(int $id): array
    {
        return (array)$this->repository->find($id);
    }

    public function store(Request $request): bool
    {
        return $this->repository->insert($request->all());
    }

    public function update(Request $request, int $id): int
    {
        return $this->repository->where('id', $id)->update($request->all());
    }

    public function destroy(int $id): int
    {
        return $this->repository->delete($id);
    }
}
