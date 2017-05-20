<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBlobOfUserNationalIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_national_ids', function (Blueprint $table) {
            //
            $table->dropColumn('birth_certificate_photocopy');
            $table->string('birth_certificate_photocopy',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_national_ids', function (Blueprint $table) {
            //
        });
    }
}
