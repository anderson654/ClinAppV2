<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJunoWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juno_webhooks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('id_wbh_juno', 191);
            $table->string('name', 191);
            $table->string('eventTypes', 191);
            $table->string('url', 191);
            $table->string('status', 191);
            $table->string('secret', 191);
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
        Schema::dropIfExists('juno_webhooks');
    }
}
