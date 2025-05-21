<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('KeluarMasukBarang', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('nama_barang');
            $table->text('deskripsi')->nullable();
            $table->integer('harga_satuan');
            $table->integer('jumlah');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('KeluarMasukBarang');
    }
};
