<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('image', 200);
            $table->string('location', 20);
            $table->tinyInteger('stars');
            $table->string('address', 50);
            $table->tinyInteger('vote');
            $table->boolean('free_cancellation');
            $table->string('room', 100);
            $table->string('board', 20);
            $table->string('price', 10);
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
        Schema::dropIfExists('travels');
    }
}
