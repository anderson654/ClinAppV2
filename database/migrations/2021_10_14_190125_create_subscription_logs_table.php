<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_logs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subscription_id');
            $table->integer('cod_source')->index('cod_source');
            $table->integer('payment_id');
            $table->integer('subscription_status_id')->nullable();
            $table->string('junoPaymentsId', 191);
            $table->string('chargeId', 191);
            $table->string('statusJuno', 191);
            $table->string('code', 191);
            $table->integer('payment_status_id');
            $table->string('message', 191);
            $table->integer('aproved');
            $table->decimal('value', 15);
            $table->integer('payment_type_id');
            $table->timestamp('due_date')->useCurrent();
            $table->integer('transactionId');
            $table->integer('checkoutUrl');
            $table->integer('code_boletofacil');
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
        Schema::dropIfExists('subscription_logs');
    }
}
