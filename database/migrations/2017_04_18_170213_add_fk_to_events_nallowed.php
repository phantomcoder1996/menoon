<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToEventsNallowed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_event_notalloweds', function (Blueprint $table) {
            //
$table->integer('event_id')->unsigned()->change();
$table->integer('user_id')->unsigned()->change();
           $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_event_notalloweds', function (Blueprint $table) {
            //
            $table->dropForeign(['event_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
