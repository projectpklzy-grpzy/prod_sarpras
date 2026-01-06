<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface LahanRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get lahan with bangunan count
     */
    public function withBangunanCount(): Collection;

    /**
     * Search lahan by name
     */
    public function searchByName(string $name): Collection;
}