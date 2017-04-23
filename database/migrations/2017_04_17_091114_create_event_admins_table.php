<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_admins', function (Blueprint $table) {
            $table->integer('event_id');
            $table->integer('admin_id');
            $table->timestamps();
            $table->primary(array('admin_id','event_id'));
            // $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
        });

        // Schema::table('event_admins', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('admin_id','event_id'));
        //     $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('event_admins');
        // Schema::dropForeign('admin_id');
        // Schema::dropForeign('event_id');
    }
}
