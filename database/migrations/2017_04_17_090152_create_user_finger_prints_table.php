<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFingerPrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_finger_prints', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamps();
           
            $table->binary('fingerprint');
            $table->primary('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });

        // Schema::table('user_finger_prints', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary('user_id');
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
        Schema::dropIfExists('user_finger_prints');
        //Schema::dropForeign('user_id');
    }
}
