<?php

use App\Http\Controllers\Api\LahanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {
    
    // Public routes
    Route::get('/health', function () {
        return response()->json([
            'status' => 'success',
            'message' => 'API is running',
            'timestamp' => now()->toISOString()
        ]);
    });

    // Protected routes (will add JWT middleware later)
    Route::middleware(['api'])->group(function () {
        
        // Lahan routes
        Route::apiResource('lahan', LahanController::class);
        Route::get('lahan/search', [LahanController::class, 'search']);
        
        // Future routes for other resources
        // Route::apiResource('bangunan', BangunanController::class);
        // Route::apiResource('kendaraan', KendaraanController::class);
        // Route::apiResource('lapang', LapangController::class);
        // Route::apiResource('peralatan', PeralatanController::class);
    });
});