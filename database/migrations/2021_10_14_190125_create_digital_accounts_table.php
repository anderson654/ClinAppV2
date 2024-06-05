<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('name');            
            $table->integer('email');
            $table->integer('juno_digital_account_id');
            $table->integer('digital_account_type_id');
            $table->integer('digital_account_status_id');            
            $table->integer('businessArea');
            $table->integer('linesOfBusiness');
            $table->integer('companyType');
            $table->enum('personType', ['F', 'J']);
            $table->string('document', 20);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital_accounts');
    }
}
