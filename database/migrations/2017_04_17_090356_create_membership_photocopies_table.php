<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipPhotocopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_photocopies', function (Blueprint $table) {
            $table->increments('id'); //indicates photocopy number
            $table->timestamps();
            $table->integer('membership_id');
            $table->binary('card_photocopy');
             //$table->foreign('membership_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
        });
        // Schema::table('membership_photocopies', function (Blueprint $table) {
        //     //$table->increments('id');
            
        //     $table->foreign('membership_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_photocopies');
       // Schema::dropForeign('membership_id');
    }
}
