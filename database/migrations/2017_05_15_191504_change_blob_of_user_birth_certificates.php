<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBlobOfUserBirthCertificates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_birth_certificates', function (Blueprint $table) {
            //
            $table->dropColumn('national_id_photocopy');
            $table->string('national_id_photocopy',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_birth_certificates', function (Blueprint $table) {
            //
        });
    }
}
