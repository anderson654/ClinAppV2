<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_clients', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('razao_social', 191)->nullable();
            $table->string('nome_fantasia', 191)->nullable();
            $table->string('cnpj', 191);
            $table->string('inscricao_estadual', 191)->nullable();
            $table->string('inscricao_municipal', 191)->nullable();
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
        Schema::dropIfExists('corporate_clients');
    }
}
