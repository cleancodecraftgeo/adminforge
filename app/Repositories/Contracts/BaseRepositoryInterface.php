<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function create(array $data): Model;

    public function update(Model $model, array $data): bool;

    public function delete(Model $model):Bool;

    public function find(string $id): ?Model;

    public function findOrFail(string $id): Model;

    public function all(): Collection;

    public function paginate(int $perPage = 20):LengthAwarePaginator;
}
