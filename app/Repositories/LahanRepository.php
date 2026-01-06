<?php

namespace App\Repositories;

use App\Models\Lahan;
use App\Repositories\Contracts\LahanRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class LahanRepository extends BaseRepository implements LahanRepositoryInterface
{
    public function __construct(Lahan $model)
    {
        parent::__construct($model);
    }

    public function withBangunanCount(): Collection
    {
        return $this->model->withCount('bangunan')->get();
    }

    public function searchByName(string $name): Collection
    {
        return $this->model->where('nama_lahan', 'LIKE', "%{$name}%")->get();
    }
}