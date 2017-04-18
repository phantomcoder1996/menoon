<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIqQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('statement',100);
            $table->binary('image')->nullable();
            $table->integer('points');
            $table->char('answer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iq_questions');
    }
}
