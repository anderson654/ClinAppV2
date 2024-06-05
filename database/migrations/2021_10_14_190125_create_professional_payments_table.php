<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('clean_slot_id')->index('clean_slot_id');
            $table->decimal('value', 15);
            $table->decimal('discount', 15);
            $table->integer('payment_status_id');
            $table->integer('user_id');
            $table->timestamp('payment_date')->nullable();
            $table->string('transaction_id', 198);
            $table->string('transaction_status', 198);
            $table->string('message', 191)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
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
        Schema::dropIfExists('professional_payments');
    }
}
