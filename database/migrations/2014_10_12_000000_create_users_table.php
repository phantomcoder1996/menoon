<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index()->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('username',20)->unique();
            $table->string('membership',50);
            $table->string('password');
            $table->string('pic');
            $table->string('email',320)->unique();
            $table->rememberToken();
            $table->timestamps();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(0);
        });

        //  Schema::table('users', function (Blueprint $table) {
        //     //$table->increments('id');
        //      $table->string('homeaddress',50);
        //      $table->string('username',20)->unique();
        //      $table->string('membershiptype',50);
        //      $table->binary('profilephoto');
        //      $table->dropColumn('email');
            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
         

    }
}
