<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToEventtopics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_topics', function (Blueprint $table) {

            $table->integer('event_id')->unsigned()->change();
            //
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
        Schema::table('event_topics', function (Blueprint $table) {
            //
            $table->integer('event_id')->unsigned()->change();
            $table->dropForeign(['event_id']);
        });
    }
}
