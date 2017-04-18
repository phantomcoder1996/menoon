<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tagtables', function (Blueprint $table) {
            //
    $table->integer('media_id')->unsigned()->change();
$table->integer('user_id')->unsigned()->change();

          $table->foreign('media_id')->references('id')->on('media')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tagtables', function (Blueprint $table) {
            //
            $table->dropForeign(['media_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
