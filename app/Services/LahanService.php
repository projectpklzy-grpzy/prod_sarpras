<?php

namespace App\Services;

use App\Exceptions\Api\ResourceNotFoundException;
use App\Models\Lahan;
use App\Repositories\Contracts\LahanRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class LahanService
{
    protected LahanRepositoryInterface $repository;

    public function __construct(LahanRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all lahan with pagination
     */
    public function getAllPaginated(int $perPage = 15): LengthAwarePaginator
    {
        return $this->repository->paginate($perPage);
    }

    /**
     * Get all active lahan
     */
    public function getAllActive(): Collection
    {
        return $this->repository->active();
    }

    /**
     * Get lahan by ID
     */
    public function getById(int $id): Model
    {
        $lahan = $this->repository->find($id);
        
        if (!$lahan) {
            throw new ResourceNotFoundException('Lahan');
        }

        return $lahan;
    }

    /**
     * Create new lahan
     */
    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    /**
     * Update lahan
     */
    public function update(int $id, array $data): Model
    {
        $lahan = $this->getById($id);
        return $this->repository->update($id, $data);
    }

    /**
     * Delete lahan
     */
    public function delete(int $id): bool
    {
        $lahan = $this->getById($id);
        return $this->repository->delete($id);
    }

    /**
     * Search lahan by name
     */
    public function searchByName(string $name): Collection
    {
        return $this->repository->searchByName($name);
    }

    /**
     * Get lahan with bangunan count
     */
    public function getWithBangunanCount(): Collection
    {
        return $this->repository->withBangunanCount();
    }
}