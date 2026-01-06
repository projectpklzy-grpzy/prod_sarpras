<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    /**
     * Get all records
     */
    public function all(): Collection;

    /**
     * Get paginated records
     */
    public function paginate(int $perPage = 15): LengthAwarePaginator;

    /**
     * Find record by ID
     */
    public function find(int $id): ?Model;

    /**
     * Find record by ID or fail
     */
    public function findOrFail(int $id): Model;

    /**
     * Create new record
     */
    public function create(array $data): Model;

    /**
     * Update record
     */
    public function update(int $id, array $data): Model;

    /**
     * Delete record
     */
    public function delete(int $id): bool;

    /**
     * Get active records only
     */
    public function active(): Collection;

    /**
     * Search records
     */
    public function search(string $query, array $columns = []): Collection;
}