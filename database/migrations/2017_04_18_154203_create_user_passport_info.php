<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPassportInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_passport_info', function (Blueprint $table) {

            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->integer('passport_no')->unique();
            $table->binary('passport_photocopy');
            $table->boolean('approved');
            $table->primary('passport_no');
           // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
 

        
        //  Schema::table('user_passport_infos', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary('passport_no');
        //     $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
        // });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_passport_info');
      //  Schema::dropForeign('user_id');
    }
}
