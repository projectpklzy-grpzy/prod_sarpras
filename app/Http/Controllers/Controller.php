<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use App\Traits\AuditTrail;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use ApiResponse, AuditTrail;

    /**
     * Default pagination limit
     */
    protected int $defaultLimit = 15;

    /**
     * Maximum pagination limit
     */
    protected int $maxLimit = 100;

    /**
     * Get pagination limit from request
     */
    protected function getLimit(): int
    {
        $limit = request('limit', $this->defaultLimit);
        return min($limit, $this->maxLimit);
    }
}
