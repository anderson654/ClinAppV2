<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_professionals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 192);
            $table->date('birthdate')->nullable();
            $table->string('cpf', 15)->nullable();
            $table->string('rg', 15)->nullable();
            $table->integer('cidade_id')->nullable();
            $table->string('state', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('phonecontact', 192);
            $table->string('street', 192)->nullable();
            $table->string('number', 192)->nullable();
            $table->string('complement', 192)->nullable();
            $table->string('neighborhood', 192)->nullable();
            $table->string('zip', 192)->nullable();
            $table->string('arrive', 192)->nullable();
            $table->string('domingo', 192)->nullable();
            $table->string('segunda', 192)->nullable();
            $table->string('terca', 192)->nullable();
            $table->string('quarta', 192)->nullable();
            $table->string('quinta', 192)->nullable();
            $table->string('sexta', 192)->nullable();
            $table->string('sabado', 192)->nullable();
            $table->string('common_cleaning', 15)->nullable();
            $table->string('heavy_cleaning', 15)->nullable();
            $table->string('commercial_cleaning', 15)->nullable();
            $table->string('cleaning_after_work', 15)->nullable();
            $table->string('ironing_clothes', 15)->nullable();
            $table->string('currentlyworks', 15)->nullable();
            $table->string('mei', 15)->nullable();
            $table->string('create_mei', 15)->nullable();
            $table->string('photo_rg', 192)->nullable();
            $table->string('curriculum', 192)->nullable();
            $table->string('proof_of_residence', 192)->nullable();
            $table->string('exp_ironing', 4)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('products', 15)->nullable();
            $table->string('terms', 5)->nullable();
            $table->timestamp('acceptTerms')->useCurrent();
            $table->tinyInteger('registration_step');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_professionals');
    }
}
