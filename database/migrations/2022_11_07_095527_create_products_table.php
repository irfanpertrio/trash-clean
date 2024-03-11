<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_barang');
            $table->float('jumlah_barang');
            $table->string('status_barang');
            $table->string('trashcoin_didapat');
            $table->string('trashcoin_sekarang');
            $table->foreignUuid('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
