<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_emails', function (Blueprint $table) {
            $table->integer('admin_id');
            $table->string('email',320);
            $table->timestamps();
            $table->primary(array('admin_id','email'));
           // $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
        });

        //  Schema::table('admin_emails', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('admin_id','email'));
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
        Schema::dropIfExists('admin_emails');
      //  Schema::dropForeign('admin_id');
    }
}
