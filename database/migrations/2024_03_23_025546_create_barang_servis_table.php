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
        Schema::create('barang_servis', function (Blueprint $table) {
            $table->id("id_servis");
            $table->unsignedBiginteger("id_pelanggan");
            $table->string("nama_barang");
            
            $table->foreign("id_pelanggan")->references("id_pelanggan")->on('pelanggan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_servis');
    }
};
