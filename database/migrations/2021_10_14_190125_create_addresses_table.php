<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('street', 191)->nullable();
            $table->integer('number')->nullable();
            $table->integer('cidade_id')->nullable();
            $table->string('complement', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('neighborhood', 191)->nullable();
            $table->string('location_address', 191)->nullable();
            $table->double('location_latitude')->nullable();
            $table->double('location_longitude')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('address_type_id')->nullable();
            $table->integer('qt_bedrooms')->nullable();
            $table->integer('qt_bathrooms')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
