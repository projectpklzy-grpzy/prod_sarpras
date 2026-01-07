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
        Schema::create('tbsar_bangunan', function (Blueprint $table) {
            $table->id('idsp_bangunan');
            $table->unsignedBigInteger('idsp_lahan');
            $table->string('nama_bangunan');
            $table->decimal('luas_bangunan', 10, 2)->nullable();
            $table->string('kepemilikan')->nullable();
            $table->decimal('harga_perolehan_bangunan', 15, 2)->nullable();
            $table->boolean('bisa_dipinjam')->default(false);
            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes
            $table->index('status');
            $table->index('idsp_lahan');
            $table->index('bisa_dipinjam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbsar_bangunan');
    }
};
