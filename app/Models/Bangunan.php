<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bangunan extends BaseModel
{
    protected $table = 'tbsar_bangunan';
    protected $primaryKey = 'idsp_bangunan';

    protected $fillable = [
        'idsp_lahan',
        'nama_bangunan',
        'luas_bangunan',
        'bisa_dipinjam',
        'harga_sewa_jam',
        'harga_sewa_hari',
        'status'
    ];

    protected $casts = [
        'luas_bangunan' => 'decimal:2',
        'bisa_dipinjam' => 'boolean',
        'harga_sewa_jam' => 'decimal:2',
        'harga_sewa_hari' => 'decimal:2',
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
    ];

    /**
     * Get the lahan that owns this bangunan
     */
    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class, 'idsp_lahan', 'idsp_lahan');
    }

    /**
     * Get all files for this bangunan
     */
    public function files(): HasMany
    {
        return $this->hasMany(BangunanFile::class, 'idsp_bangunan', 'idsp_bangunan');
    }

    /**
     * Get all sewa records for this bangunan
     */
    public function sewa(): HasMany
    {
        return $this->hasMany(BangunanSewa::class, 'idsp_bangunan', 'idsp_bangunan');
    }

    /**
     * Get public files only
     */
    public function publicFiles(): HasMany
    {
        return $this->files()->where('status', 'PUBLIK');
    }

    /**
     * Scope for rentable bangunan
     */
    public function scopeRentable($query)
    {
        return $query->where('bisa_dipinjam', true);
    }
}