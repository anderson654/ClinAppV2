<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleanSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clean_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('value', 15)->nullable();
            $table->timestamps();
            $table->unsignedInteger('clean_id')->nullable()->index('259793_5c5099acb8875');
            $table->unsignedInteger('user_id')->nullable()->index('259793_5c5099accf3b3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clean_slots');
    }
}
