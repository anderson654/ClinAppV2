<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('email', 191);
            $table->string('password', 191);
            $table->string('api_token', 80)->nullable();
            $table->string('remember_token', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('role_id')->nullable()->index('251643_5c379173af26a');
            $table->tinyInteger('status')->nullable();
            $table->string('hashMobile', 191)->nullable();
            $table->tinyInteger('leads')->nullable();
            $table->enum('como_chegou', ['Facebook', 'Google', 'Instagram', 'Indicação', 'Outros', 'Ecoville']);
            $table->integer('cod_source')->nullable();
            $table->integer('salesman_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
