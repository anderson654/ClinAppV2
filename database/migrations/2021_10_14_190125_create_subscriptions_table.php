<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('client_id');
            $table->integer('salesman_id')->nullable();
            $table->integer('corpotate_client_id')->nullable();
            $table->integer('clean_category_id')->nullable();
            $table->integer('address_type_id')->nullable();
            $table->integer('clean_type_id');
            $table->integer('status_id');
            $table->string('total_time', 191);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('startDay');
            $table->time('startTime');
            $table->integer('qt_employees')->nullable();
            $table->tinyInteger('products_included')->nullable();
            $table->decimal('value_clean', 15);
            $table->timestamp('date_last_renewal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
