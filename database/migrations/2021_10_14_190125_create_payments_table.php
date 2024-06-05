<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscription_id')->nullable();
            $table->integer('clean_id')->nullable();
            $table->integer('order_id')->nullable();
            $table->integer('user_id');
            $table->integer('payment_status_id');
            $table->tinyInteger('payment_type_id');
            $table->date('payment_date')->nullable();
            $table->double('value', 10, 2);
            $table->string('month', 10);
            $table->tinyInteger('aproved');
            $table->string('link_pagamento', 191);
            $table->string('code_boletofacil', 191)->nullable();
            $table->string('paymentToken', 191);
            $table->string('link_boleto', 191)->nullable();
            $table->date('due_date');
            $table->decimal('fee', 16);
            $table->decimal('payment_amount', 16);
            $table->softDeletes();
            $table->timestamps();
            $table->string('barcodeNumber', 198);
            $table->string('checkoutUrl', 598);
            $table->string('statusJuno', 191);
            $table->string('chargeId', 191);
            $table->string('transactionId', 191);
            $table->string('junoPaymentsId', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
