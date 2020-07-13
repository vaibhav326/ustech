<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('image_uri')->nullable();
            $table->string('jersey_no')->nullable();
            $table->string('batting_hand')->nullable();
            $table->string('bowling_skill')->nullable();
            $table->string('country')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
