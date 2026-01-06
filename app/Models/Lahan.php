<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Lahan extends BaseModel
{
    protected $table = 'tbsar_lahan';
    protected $primaryKey = 'idsp_lahan';

    protected $fillable = [
        'nama_lahan',
        'luas_lahan',
        'kepemilikan',
        'harga_perolehan_lahan',
        'status'
    ];

    protected $casts = [
        'luas_lahan' => 'decimal:2',
        'harga_perolehan_lahan' => 'decimal:2',
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
    ];

    /**
     * Get all bangunan for this lahan
     */
    public function bangunan(): HasMany
    {
        return $this->hasMany(Bangunan::class, 'idsp_lahan', 'idsp_lahan');
    }

    /**
     * Get active bangunan for this lahan
     */
    public function activeBangunan(): HasMany
    {
        return $this->bangunan()->active();
    }
}