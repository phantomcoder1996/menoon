<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToQuestionChoices extends Migration
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
             $table->integer('q_id')->unsigned()->change();
            $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
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
             $table->dropForeign(['q_id']);
        });
    }
}
