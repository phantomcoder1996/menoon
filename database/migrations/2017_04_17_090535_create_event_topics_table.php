<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_topics', function (Blueprint $table) {
            $table->integer('event_id');
            $table->timestamps();
            $table->string('topic',100);
            $table->primary(array('event_id','topic'));
           // $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });


        // Schema::table('event_topics', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('event_id','topic'));
        //     $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_topics');
        //Schema::dropForeign('event_id');
    }
}
