<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_surveys', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('question', 999);
            $table->string('answer_a', 191);
            $table->string('answer_b', 191);
            $table->string('answer_c', 191)->nullable();
            $table->string('answer_d', 191)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->enum('status', ['ativa', 'concluída']);
            $table->enum('audience', ['professionals', 'costumers']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_surveys');
    }
}
