<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id'); //indocates membershipid
            $table->integer('user_id');
            $table->timestamps();
            $table->string('membership_card_status',10);
            $table->date('expirationdate');
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
           
          
        });
     // Schema::table('members', function (Blueprint $table) {
     //        //$table->increments('id');
            
     //        $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
     //    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
       // Schema::dropForeign('user_id');
    }
}
