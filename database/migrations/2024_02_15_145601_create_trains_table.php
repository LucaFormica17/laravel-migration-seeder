<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('factory', 50);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->date('departure_time')->format();
            $table->date('arrival_time')->format();
            $table->string('train_code', 50);
            $table->tinyInteger('n_train_cars')->unsigned();
            $table->boolean('delay')->default(0);
            $table->boolean('deleted')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
