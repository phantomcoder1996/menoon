<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNationalIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_national_ids', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamps();
            $table->integer('national_id_no')->unique();
            $table->binary('national_id_photocopy');
            $table->boolean('approved');  
            $table->primary('national_id_no');
           // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
                  });


        //  Schema::table('user_national_ids', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary('national_id_no');
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
        Schema::dropIfExists('user_national_ids');
    }
}
