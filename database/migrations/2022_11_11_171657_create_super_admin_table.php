<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_admin', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('judul_halaman_awal');
            $table->text('konten_halaman_awal');
            $table->text('judul_tentang');
            $table->text('konten_tentang');
            $table->text('katalog_bahan_organik')->nullable();
            $table->text('katalog_bahan_anorganik')->nullable();
            $table->text('katalog_bahan_b3')->nullable();
            $table->text('judul_berita')->nullable();
            $table->text('foto_berita')->nullable();
            $table->text('keterangan_berita')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('super_admin');
    }
}
