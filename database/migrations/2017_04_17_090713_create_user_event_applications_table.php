<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_event_applications', function (Blueprint $table) {
            $table->increments('id');//application number
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('event_id');
            $table->date('application_date');
            $table->integer('iq_test_score')->nullable();
            $table->boolean('money_paid')->default(false);
           //   $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
          //  $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
        //  Schema::table('user_event_applications', function (Blueprint $table) {
        //     //$table->increments('id');
          
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
        Schema::dropIfExists('user_event_applications');
        // Schema::dropForeign('event_id');
        // Schema::dropForeign('user_id');
    }
}
