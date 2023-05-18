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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('bagian');
            $table->string('gol');
            $table->string('agama');
            $table->date('tgl_lahir');
            $table->date('tgl_masuk');
            $table->date('tgl_pensiun');
            $table->string('pendidikan');
            $table->integer('no_ktp');
            $table->string('nama_istri');
            $table->integer('jml_anak');
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->string('foto_ijazah');
            $table->string('foto_akte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
