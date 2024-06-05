<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('qt_bedrooms')->nullable();
            $table->unsignedInteger('qt_bathrooms')->nullable();
            $table->string('total_time', 191)->nullable();
            $table->tinyInteger('products_included')->nullable()->default(1);
            $table->decimal('value', 15)->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->tinyInteger('pet')->nullable()->default(0);
            $table->text('pet_cautions')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('client_id')->nullable()->index('251657_5c37a2e66b625');
            $table->integer('subscription_id')->nullable();
            $table->unsignedInteger('status_id')->nullable()->index('251657_5c37a2e683efe');
            $table->unsignedInteger('address_type_id')->nullable()->index('251657_5c37a6642da79');
            $table->unsignedInteger('clean_type_id')->nullable()->index('251657_5c37a6644a0e3');
            $table->unsignedInteger('clean_category_id')->nullable()->index('251657_5c37a66462052');
            $table->unsignedInteger('qt_employees')->nullable();
            $table->tinyInteger('dayofweek')->nullable();
            $table->integer('cupom_desconto_id');
            $table->tinyInteger('lead');
            $table->decimal('desconto', 6);
            $table->integer('salesman_id')->nullable();
            $table->integer('client_address_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cleans');
    }
}
