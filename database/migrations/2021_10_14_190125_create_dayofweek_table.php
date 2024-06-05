<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayofweekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayofweek', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->tinyInteger('domingo')->nullable()->default(0);
            $table->tinyInteger('segunda')->nullable()->default(0);
            $table->tinyInteger('terca')->nullable()->default(0);
            $table->tinyInteger('quarta')->nullable()->default(0);
            $table->tinyInteger('quinta')->nullable()->default(0);
            $table->tinyInteger('sexta')->nullable()->default(0);
            $table->tinyInteger('sabado')->nullable()->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dayofweek');
    }
}
