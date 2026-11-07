<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('identitas', 50)->unique()->after('id'); // NIM / NIP / Username
            $table->enum('peran', ['Peminjam', 'Admin'])->default('Peminjam')->after('password');
            $table->boolean('status_aktif')->default(true)->after('peran');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['identitas', 'peran', 'status_aktif']);
        });
    }
};