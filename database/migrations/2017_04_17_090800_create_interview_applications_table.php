<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_applications', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('event_id');
            $table->timestamps();
            $table->dateTime('interview_date_time');
                        $table->primary(array('user_id','event_id'));
            // $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        // Schema::table('interview_applications', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('user_id','event_id'));
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
        Schema::dropIfExists('interview_applications');
        // Schema::dropForeign('event_id');
        // Schema::dropForeign('user_id');
    }
}
