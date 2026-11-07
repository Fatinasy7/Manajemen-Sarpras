<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokumen_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_id')->unique()->constrained('pengajuan')->onDelete('cascade');
            $table->string('nama_berkas_asli');
            $table->string('nama_berkas_tersimpan');
            $table->string('tipe', 50)->default('application/pdf');
            $table->integer('ukuran'); // Ukuran dalam Bytes / KB
            $table->timestamp('waktu_unggah')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumen_proposals');
    }
};
