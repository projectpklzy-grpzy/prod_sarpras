<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseModel extends Model
{
    use SoftDeletes;

    /**
     * Disable Laravel's default timestamps
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at'
    ];

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->date_created = now();
            $model->created_by = auth()->id();
            $model->status = $model->status ?? 'aktif';
        });

        static::updating(function ($model) {
            $model->date_updated = now();
            $model->updated_by = auth()->id();
        });
    }

    /**
     * Scope for active records
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'aktif');
    }

    /**
     * Scope for inactive records
     */
    public function scopeInactive($query)
    {
        return $query->where('status', 'non-aktif');
    }
}