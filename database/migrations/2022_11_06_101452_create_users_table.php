<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('role');
            $table->string('nama', 255);
            $table->string('no_telepon', 13);
            $table->string('alamat', 255);
            $table->string('foto')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('point')->default(0);
            $table->timestamp('updated_at')->useCurrent()->useCurrentonUpdate();
            $table->timestamp('created_at')->useCurrent();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
    }
}
