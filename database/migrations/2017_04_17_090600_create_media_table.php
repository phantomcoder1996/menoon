<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('event_id');
            $table->string('URL',1000)->nullable();
            $table->string('type',10)->nullable();
              //  $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });


       // Schema::table('media', function (Blueprint $table) {
       //      //$table->increments('id');
            
       //      $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            
       //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
        //Schema::dropForeign('event_id');
    }
}
