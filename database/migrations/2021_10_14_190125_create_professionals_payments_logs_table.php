<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsPaymentsLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals_payments_logs', function (Blueprint $table) {
            $table->integer('id', true)->index('id');
            $table->unsignedInteger('professional_payments_id');
            $table->integer('user_id')->nullable();
            $table->timestamp('payment_date')->useCurrent();
            $table->integer('payment_status_id');
            $table->string('digitalAccountId', 191);
            $table->timestamp('creationDate')->nullable();
            $table->timestamp('transferDate')->nullable();
            $table->decimal('amount', 16)->nullable();
            $table->string('errorCode', 191);
            $table->string('error', 191)->nullable();
            $table->string('message', 191);
            $table->integer('cod_source');
            $table->string('transaction_id', 191);
            $table->string('eventId', 191)->nullable();
            $table->integer('transaction_status');
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
        Schema::dropIfExists('professionals_payments_logs');
    }
}
