<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_trainings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('professional_id');
            $table->timestamp('expiration_date')->useCurrent();
            $table->integer('training_id');
            $table->integer('time_stopped');
            $table->integer('status_id');
            $table->integer('hits');
            $table->integer('release_order');
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
        Schema::dropIfExists('completed_trainings');
    }
}
