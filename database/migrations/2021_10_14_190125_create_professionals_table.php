<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('user_id');
            $table->string('cpf', 191)->nullable();
            $table->tinyInteger('has_products')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender', 191)->nullable();
            $table->string('mei', 20);
            $table->string('mei_user', 100);
            $table->string('mei_passwd', 100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
