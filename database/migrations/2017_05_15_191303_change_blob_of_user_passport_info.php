<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBlobOfUserPassportInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_passport_info', function (Blueprint $table) {
            //
            $table->dropColumn('passport_photocopy');
            $table->string('passport_photo',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_passport_info', function (Blueprint $table) {
            //
        });
    }
}
