<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Modernize tbsar_bangunan table
        Schema::table('tbsar_bangunan', function (Blueprint $table) {
            // Add Laravel timestamps and soft deletes
            $table->timestamps();
            $table->softDeletes();
            
            // Add indexes for performance
            $table->index('status');
            $table->index('created_by');
            $table->index('idsp_lahan');
            $table->index('bisa_dipinjam');
            $table->index(['status', 'bisa_dipinjam']);
            
            // Ensure proper collation
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Convert bisa_dipinjam from ENUM to boolean
        DB::statement("ALTER TABLE tbsar_bangunan MODIFY COLUMN bisa_dipinjam BOOLEAN DEFAULT FALSE");
        
        // Update existing data
        DB::statement("UPDATE tbsar_bangunan SET bisa_dipinjam = CASE WHEN bisa_dipinjam = 'YA' THEN 1 ELSE 0 END");

        // Add foreign key constraints
        Schema::table('tbsar_bangunan', function (Blueprint $table) {
            $table->foreign('idsp_lahan')->references('idsp_lahan')->on('tbsar_lahan')->onDelete('cascade');
            
            if (Schema::hasTable('users')) {
                $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
                $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbsar_bangunan', function (Blueprint $table) {
            $table->dropForeign(['idsp_lahan']);
            if (Schema::hasTable('users')) {
                $table->dropForeign(['created_by']);
                $table->dropForeign(['updated_by']);
            }
            
            $table->dropSoftDeletes();
            $table->dropTimestamps();
            $table->dropIndex(['status']);
            $table->dropIndex(['created_by']);
            $table->dropIndex(['idsp_lahan']);
            $table->dropIndex(['bisa_dipinjam']);
            $table->dropIndex(['status', 'bisa_dipinjam']);
        });

        // Revert bisa_dipinjam to ENUM
        DB::statement("ALTER TABLE tbsar_bangunan MODIFY COLUMN bisa_dipinjam ENUM('YA', 'TIDAK') DEFAULT 'TIDAK'");
    }
};