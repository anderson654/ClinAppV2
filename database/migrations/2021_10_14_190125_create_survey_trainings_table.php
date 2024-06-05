<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_trainings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('training_id');
            $table->string('question', 999);
            $table->string('answer_a', 191);
            $table->string('answer_b', 191);
            $table->string('answer_c', 191)->nullable();
            $table->string('answer_d', 191)->nullable();
            $table->enum('right_answer', ['a', 'b', 'c', 'd']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_trainings');
    }
}
