<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BangunanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->idsp_bangunan,
            'nama_bangunan' => $this->nama_bangunan,
            'luas_bangunan' => (float) $this->luas_bangunan,
            'bisa_dipinjam' => (bool) $this->bisa_dipinjam,
            'harga_sewa_jam' => (float) $this->harga_sewa_jam,
            'harga_sewa_hari' => (float) $this->harga_sewa_hari,
            'status' => $this->status,
            'lahan' => new LahanResource($this->whenLoaded('lahan')),
            'files' => BangunanFileResource::collection($this->whenLoaded('files')),
            'sewa' => BangunanSewaResource::collection($this->whenLoaded('sewa')),
            'date_created' => $this->date_created?->format('Y-m-d H:i:s'),
            'date_updated' => $this->date_updated?->format('Y-m-d H:i:s')
        ];
    }
}