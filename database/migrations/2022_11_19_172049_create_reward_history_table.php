<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_history', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->string('status');
            $table->string('no_ewallet')->nullable();
            $table->foreignId('reward_id');
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
        Schema::dropIfExists('reward_history');
    }
}
