<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUserFingerPrintsPk extends Migration
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
           $table->string('fingerprints',500)->change();
            $table->dropForeign('user_finger_prints_user_id_foreign');
             $table->dropPrimary();

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
