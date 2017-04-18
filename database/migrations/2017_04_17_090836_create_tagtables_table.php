<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagtables', function (Blueprint $table) {
            $table->integer('media_id');
            $table->integer('user_id');
            $table->boolean('approved')->default(false);

            $table->timestamps();
                        $table->primary(array('user_id','media_id'));
            // $table->foreign('media_id')->references('id')->on('media')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });


        // Schema::table('tagtables', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('user_id','media_id'));
        //     $table->foreign('media_id')->references('id')->on('media')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tagtables');
         // Schema::dropForeign('media_id');
         //  Schema::dropForeign('user_id');
    }
}
