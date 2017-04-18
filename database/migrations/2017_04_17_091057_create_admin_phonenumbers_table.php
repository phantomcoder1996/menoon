<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPhonenumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_phonenumbers', function (Blueprint $table) {
            $table->integer('admin_id');
            $table->timestamps();
            $table->string('countrycode',5);
            $table->string('phonenumber',15);
             $table->primary(array('admin_id','countrycode','phonenumber'));
          //  $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            
        });

        // Schema::table('admin_phonenumbers', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('admin_id','countrycode','phonenumber'));
        //     $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_phonenumbers');
      //  Schema::dropForeign('admin_id');
    }
}
