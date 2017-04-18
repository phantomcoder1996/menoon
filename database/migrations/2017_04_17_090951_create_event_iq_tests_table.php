<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventIqTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_iq_tests', function (Blueprint $table) {
            $table->integer('event_id');
            $table->integer('q_id');
            $table->timestamps();
            $table->primary(array('q_id','event_id'));
     //       $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });

        // Schema::table('event_iq_tests', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('q_id','event_id'));
        //     $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('event_iq_tests');
         // Schema::dropForeign('event_id');
         //  Schema::dropForeign('q_id');
    }
}
