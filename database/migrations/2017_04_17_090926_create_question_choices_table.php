<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_choices', function (Blueprint $table) {
            $table->integer('q_id');
            $table->char('q_choice_char');
            $table->string('q_choice_content',100)->nullable();
            $table->binary('q_choice_image')->nullable();
            $table->timestamps();
            $table->primary(array('q_id','q_choice_char'));
           // $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
        });


        // Schema::table('question_choices', function (Blueprint $table) {
        //     //$table->increments('id');
        //     $table->primary(array('q_id','q_choice_char'));
        //     $table->foreign('q_id')->references('id')->on('iq_questions')->onUpdate('cascade')->onDelete('cascade');
            
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_choices');
      //  Schema::dropForeign('q_id');
    }
}
