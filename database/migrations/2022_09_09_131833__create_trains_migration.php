<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company', 50);
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->string('train_code', 15);
            $table->tinyInteger('number_of_carriages');
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_delete')->default(0);
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
        Schema::drop('trains');
    }
}
