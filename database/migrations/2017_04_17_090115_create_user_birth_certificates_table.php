<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBirthCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_birth_certificates', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamps();
            $table->integer('birth_certificate_no')->unique();
            $table->binary('birth_certificate_photocopy');
            $table->boolean('approved');
            $table->primary('birth_certificate_no');
           // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        // Schema::table('user_birth_certificates', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary('birth_certificate_no');
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
        Schema::dropIfExists('user_birth_certificates');
        // Schema::dropForeign('user_id');
    }
}
