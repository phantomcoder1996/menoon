<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToMembershipPhcp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('membership_photocopies', function (Blueprint $table) {
            //
            $table->integer('membership_id')->unsigned()->change();
            $table->foreign('membership_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('membership_photocopies', function (Blueprint $table) {
            //
            $table->dropForeign(['membership_id']);
        });
    }
}
