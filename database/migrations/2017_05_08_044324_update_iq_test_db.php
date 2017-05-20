<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIqTestDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_choices', function (Blueprint $table) {
            //
            $table->integer('q_choice_char')->change();
        });

        Schema::table('iq_questions',function(Blueprint $table){
            $table->integer('answer')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_choices', function (Blueprint $table) {
            //
        });
          Schema::table('iq_questions',function(Blueprint $table){
          
        });
    }
}
