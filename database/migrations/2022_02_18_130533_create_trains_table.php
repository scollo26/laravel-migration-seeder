<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('company', 100);
            $table->string('depart_station', 100);
            $table->string('arrived_station', 100);
            $table->time('hours_start');
            // $table->date('date_start');
            // $table->time('hours_end');
            // $table->date('date_end');
            $table->string('code_train', 50);
            $table->string('number_carriages', 10);
            $table->boolean('on_time');
            $table->boolean('deleted');
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
}
