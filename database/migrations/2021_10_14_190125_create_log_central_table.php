<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogCentralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_central', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('user_id')->nullable()->comment('operador');
            $table->integer('cod_source');
            $table->string('source', 191)->comment('origem do evento');
            $table->text('log')->nullable()->comment('log');
            $table->char('event_type', 2)->nullable()->comment('C- Criado/A - Alterado /D - Deletado/ V - Vizualizado');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable();
            $table->integer('clean_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_central');
    }
}
