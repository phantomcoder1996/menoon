<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToEventIqtests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_iq_tests', function (Blueprint $table) {
            //

           $table->integer('event_id')->unsigned()->change();
           $table->integer('q_id')->unsigned()->change();
           $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
           $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_iq_tests', function (Blueprint $table) {
            //
                        $table->dropForeign(['event_id']);
            $table->dropForeign(['q_id']);
        });
    }
}
