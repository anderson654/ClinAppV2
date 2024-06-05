<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('duration');
            $table->string('video_id', 192);
            $table->integer('status_id');
            $table->integer('lifetime');
            $table->integer('mandatory');
            $table->integer('training_category_id');
            $table->integer('release_order');
            $table->integer('prerequisite_training_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
            $table->integer('author_user_id');
            $table->integer('responsable_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
