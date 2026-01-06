<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbsar_lahan', function (Blueprint $table) {
            $table->id('idsp_lahan');
            $table->string('nama_lahan');
            $table->decimal('luas_lahan', 15, 2);
            $table->string('kepemilikan', 100);
            $table->decimal('harga_perolehan_lahan', 20, 2);
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('date_created')->nullable();
            $table->timestamp('date_updated')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes
            $table->index('status');
            $table->index('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbsar_lahan');
    }
};