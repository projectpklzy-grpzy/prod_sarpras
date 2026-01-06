<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BangunanFile extends BaseModel
{
    protected $table = 'tbsar_bangunan_file';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idsp_bangunan',
        'nama_file',
        'file',
        'status'
    ];

    protected $casts = [
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
    ];

    /**
     * Get the bangunan that owns this file
     */
    public function bangunan(): BelongsTo
    {
        return $this->belongsTo(Bangunan::class, 'idsp_bangunan', 'idsp_bangunan');
    }

    /**
     * Scope for public files
     */
    public function scopePublic($query)
    {
        return $query->where('status', 'PUBLIK');
    }

    /**
     * Scope for private files
     */
    public function scopePrivate($query)
    {
        return $query->where('status', 'PRIVATE');
    }
}