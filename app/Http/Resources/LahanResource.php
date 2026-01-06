<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LahanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->idsp_lahan,
            'nama_lahan' => $this->nama_lahan,
            'luas_lahan' => (float) $this->luas_lahan,
            'kepemilikan' => $this->kepemilikan,
            'harga_perolehan_lahan' => (float) $this->harga_perolehan_lahan,
            'status' => $this->status,
            'bangunan_count' => $this->when(isset($this->bangunan_count), $this->bangunan_count),
            'bangunan' => BangunanResource::collection($this->whenLoaded('bangunan')),
            'date_created' => $this->date_created?->format('Y-m-d H:i:s'),
            'date_updated' => $this->date_updated?->format('Y-m-d H:i:s')
        ];
    }
}