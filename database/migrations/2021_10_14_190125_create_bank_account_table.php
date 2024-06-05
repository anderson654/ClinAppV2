<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('agencia', 11)->nullable();
            $table->integer('conta')->nullable();
            $table->integer('digito')->nullable();
            $table->tinyInteger('main')->nullable();
            $table->string('type_account', 254)->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->integer('bank_cod_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_account');
    }
}
