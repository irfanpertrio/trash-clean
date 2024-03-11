<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_informasi', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('konten');
            $table->string('gambar');
            // $table->string('kategori');
            $table->timestamp('updated_at')->useCurrent()->useCurrentonUpdate();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_informasi');
    }
}
