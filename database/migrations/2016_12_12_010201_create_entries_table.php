<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{

    public function up()
    {
        Schema::create('entries', function (Blueprint $table){
          $table->increments('id');
          $table->timestamps();
          $table->datetime('time_slept');
          $table->datetime('time_woken');
          $table->integer('room_temperature') ->nullable();
          $table->string('temperature_constant')->nullable();
          $table->string('notes')->nullable();
          $table->float('hours_slept');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entries');
    }
}
