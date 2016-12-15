<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEntriesAndUsers extends Migration
{

    public function up()
    {
        Schema::table('entries', function(Blueprint $table){
          $table->integer('user_id')->unsigned();

          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('entries', function(Blueprint $table){
          $table->dropForeign('entries_user_id_foreign');
          $table->dropColumn('user_id');
        });
    }
}
