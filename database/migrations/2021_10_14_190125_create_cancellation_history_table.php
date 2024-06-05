<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancellationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancellation_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('professional_user_id')->nullable();
            $table->integer('clean_id')->nullable();
            $table->integer('subscription_id')->nullable();
            $table->unsignedTinyInteger('reason_id');
            $table->text('observation');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancellation_history');
    }
}
