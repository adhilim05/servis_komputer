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
        Schema::create('detail_barang_servis', function (Blueprint $table) {
            $table->id("id_detail_servis");
            $table->unsignedBiginteger("id_servis");
            $table->unsignedBiginteger("id_status");
            $table->integer("tgl_ambil");
            $table->integer("tgl_terima");
            $table->string("model");
            $table->text("keluhan");
            $table->text("masalah");
            $table->integer("biaya");
            $table->enum("status",['antrian','proses','selesai']);


            $table->foreign("id_servis")->references("id_servis")->on('barang_servis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_barang_servis');
    }
};
