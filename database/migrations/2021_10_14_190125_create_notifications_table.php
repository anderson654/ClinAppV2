<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('clean_id');
            $table->integer('professional_id')->nullable();
            $table->integer('professional_id2')->nullable();
            $table->integer('professional_id3')->nullable();
            $table->integer('professional_id4')->nullable();
            $table->dateTime('old_date');
            $table->dateTime('new_date');
            $table->integer('viewed')->nullable()->default(0);
            $table->timestamps();
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
        Schema::dropIfExists('notifications');
    }
}
