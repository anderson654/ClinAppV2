<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCupomDescontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupom_descontos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome');
            $table->string('localizador');
            $table->decimal('desconto', 6);
            $table->enum('modo_desconto', ['porc', 'valor'])->nullable();
            $table->decimal('limite', 6);
            $table->enum('modo_limite', ['valor', 'qtd']);
            $table->timestamp('dthr_validade')->useCurrent();
            $table->enum('somente_novos_clientes', ['S', 'N']);
            $table->enum('ativo', ['S', 'N']);
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
        Schema::dropIfExists('cupom_descontos');
    }
}
