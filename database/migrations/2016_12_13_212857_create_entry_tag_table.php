<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTagTable extends Migration
{

    public function up()
    {
      Schema::create('entry_tag', function(Blueprint $table){

        $table->increments('id');
        $table->timestamps();
        # foreign keys are unsigned
        $table->integer('entry_id')->unsigned();
        $table->integer('tag_id')->unsigned();
        # making foreign key
        $table->foreign('entry_id')->references('id')->on('entries');
        $table->foreign('tag_id')->references('id')->on('tags');

      });
    }


    public function down()
    {
        Schema::drop('entry_tag');
    }
}
