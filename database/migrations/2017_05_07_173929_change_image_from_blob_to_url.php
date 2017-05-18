<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeImageFromBlobToUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_finger_prints', function (Blueprint $table) {
            //
            $table->dropColumn('fingerprint');
            $table->string('fingerprints',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_finger_prints', function (Blueprint $table) {
            //
        });
    }
}
