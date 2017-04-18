<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attendances', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamps();
            $table->integer('event_id');
            $table->date('day');
            $table->boolean('status')->default(false);
            $table->primary(array('event_id','user_id','day'));
           // $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
           
        });

        // Schema::table('event_attendances', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('event_id','user_id','day'));
        //     $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_attendances');
        // Schema::dropForeign('event_id');
        // Schema::dropForeign('user_id');
    }
}
