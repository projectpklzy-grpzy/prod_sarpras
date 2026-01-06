<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BangunanSewa extends BaseModel
{
    protected $table = 'tbsar_bangunan_sewa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idsp_bangunan',
        'nama',
        'email',
        'no_hp',
        'tgl_sewa_awal',
        'tgl_sewa_akhir',
        'status_bayar',
        'total'
    ];

    protected $casts = [
        'tgl_sewa_awal' => 'date',
        'tgl_sewa_akhir' => 'date',
        'total' => 'decimal:2',
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
    ];

    /**
     * Get the bangunan that is being rented
     */
    public function bangunan(): BelongsTo
    {
        return $this->belongsTo(Bangunan::class, 'idsp_bangunan', 'idsp_bangunan');
    }

    /**
     * Scope for paid rentals
     */
    public function scopePaid($query)
    {
        return $query->where('status_bayar', 'LUNAS');
    }

    /**
     * Scope for unpaid rentals
     */
    public function scopeUnpaid($query)
    {
        return $query->where('status_bayar', 'BELUM_LUNAS');
    }

    /**
     * Scope for active rentals (current date between rental period)
     */
    public function scopeActive($query)
    {
        $today = now()->toDateString();
        return $query->where('tgl_sewa_awal', '<=', $today)
                    ->where('tgl_sewa_akhir', '>=', $today);
    }
}