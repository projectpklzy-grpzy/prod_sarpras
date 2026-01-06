<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreLahanRequest;
use App\Http\Resources\LahanResource;
use App\Services\LahanService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    protected LahanService $lahanService;

    public function __construct(LahanService $lahanService)
    {
        $this->lahanService = $lahanService;
    }

    /**
     * Display a listing of lahan
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $perPage = $this->getLimit();
            $lahan = $this->lahanService->getAllPaginated($perPage);
            
            return $this->successResponse(
                LahanResource::collection($lahan),
                'Data lahan berhasil diambil'
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Gagal mengambil data lahan: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created lahan
     */
    public function store(StoreLahanRequest $request): JsonResponse
    {
        try {
            $data = $this->mergeCreateAuditData($request->validated());
            $lahan = $this->lahanService->create($data);
            
            return $this->successResponse(
                new LahanResource($lahan),
                'Lahan berhasil dibuat',
                201
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Gagal membuat lahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified lahan
     */
    public function show(int $id): JsonResponse
    {
        try {
            $lahan = $this->lahanService->getById($id);
            
            return $this->successResponse(
                new LahanResource($lahan),
                'Data lahan berhasil diambil'
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Lahan tidak ditemukan', 404);
        }
    }

    /**
     * Update the specified lahan
     */
    public function update(StoreLahanRequest $request, int $id): JsonResponse
    {
        try {
            $data = $this->mergeUpdateAuditData($request->validated());
            $lahan = $this->lahanService->update($id, $data);
            
            return $this->successResponse(
                new LahanResource($lahan),
                'Lahan berhasil diperbarui'
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Gagal memperbarui lahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified lahan
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $this->lahanService->delete($id);
            
            return $this->successResponse(
                null,
                'Lahan berhasil dihapus'
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Gagal menghapus lahan: ' . $e->getMessage());
        }
    }

    /**
     * Search lahan by name
     */
    public function search(Request $request): JsonResponse
    {
        try {
            $query = $request->get('q', '');
            $lahan = $this->lahanService->searchByName($query);
            
            return $this->successResponse(
                LahanResource::collection($lahan),
                'Hasil pencarian lahan'
            );
        } catch (\Exception $e) {
            return $this->errorResponse('Gagal mencari lahan: ' . $e->getMessage());
        }
    }
}