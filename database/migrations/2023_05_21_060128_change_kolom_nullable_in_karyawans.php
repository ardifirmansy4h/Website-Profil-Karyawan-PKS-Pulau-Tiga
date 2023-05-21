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
        Schema::table('karyawans', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
            $table->string('jabatan_saat')->nullable()->change();
            $table->string('no_regis')->nullable()->change();
            $table->string('foto_penghargaan')->nullable()->change();
            $table->string('foto_pelatihan')->nullable()->change();
            $table->string('foto_peringatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('karyawans', function (Blueprint $table) {
            //
        });
    }
};
