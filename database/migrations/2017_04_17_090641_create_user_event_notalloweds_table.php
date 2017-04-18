<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventNotallowedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_event_notalloweds', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamps();
            $table->integer('event_id');
            $table->text('reason')->nullable();
             $table->primary(array('event_id','user_id'));
        });
        // Schema::table('user_event_notalloweds', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('event_id','user_id'));
        //     $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        //    // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_event_notalloweds');
        // Schema::dropForeign('event_id');
        // Schema::dropForeign('user_id');
    }
}
