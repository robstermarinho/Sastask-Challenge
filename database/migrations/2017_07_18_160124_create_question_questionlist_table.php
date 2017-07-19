<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionQuestionlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_questionlist', function (Blueprint $table) {
            $table->integer('question_id')->unsigned();
            $table->integer('questionlist_id')->unsigned();
            
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('questionlist_id')->references('id')->on('questionlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_questionlist');
    }
}
