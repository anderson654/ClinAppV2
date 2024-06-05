<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferredProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferred_professionals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('client_id');
            $table->integer('professional_id')->nullable();
            $table->integer('dayWeek');
            $table->time('start');
            $table->time('end');
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('coments', 191)->nullable();
            $table->timestamp('checked_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferred_professionals');
    }
}
