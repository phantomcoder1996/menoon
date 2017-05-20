<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fullname',60);
            $table->string('username',60)->unique();
            $table->string('password');
            $table->string('role',50);
            $table->date('activation_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(true);
            $table->string('email',320);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
