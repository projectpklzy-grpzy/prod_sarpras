<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait AuditTrail
{
    /**
     * Get audit data for creating records
     */
    protected function getCreateAuditData(): array
    {
        return [
            'created_by' => Auth::id(),
            'date_created' => now(),
            'status' => 'aktif'
        ];
    }

    /**
     * Get audit data for updating records
     */
    protected function getUpdateAuditData(): array
    {
        return [
            'updated_by' => Auth::id(),
            'date_updated' => now()
        ];
    }

    /**
     * Merge request data with audit data for create
     */
    protected function mergeCreateAuditData(array $data): array
    {
        return array_merge($data, $this->getCreateAuditData());
    }

    /**
     * Merge request data with audit data for update
     */
    protected function mergeUpdateAuditData(array $data): array
    {
        return array_merge($data, $this->getUpdateAuditData());
    }
}