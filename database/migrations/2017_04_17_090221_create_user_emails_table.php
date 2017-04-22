<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emails', function (Blueprint $table) {
            $table->integer('user_id')->unique();
            $table->timestamps();
            $table->string('email',320)->unique();
            $table->boolean('primary1')->default(false);
            $table->primary(array('user_id','email'));
           // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        // Schema::table('user_emails', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('user_id','email'));
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
        Schema::dropIfExists('user_emails');
//Schema::dropForeign('user_id');
    }
}
