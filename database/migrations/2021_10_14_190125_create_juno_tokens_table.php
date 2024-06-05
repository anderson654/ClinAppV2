<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJunoTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juno_tokens', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('clientId', 198);
            $table->string('clientSecret', 198);
            $table->string('authorization_url', 198);
            $table->string('access_token', 998);
            $table->string('pixKey', 191)->nullable();
            $table->integer('version');
            $table->string('token_privado', 198);
            $table->string('integration_link', 198);
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
        Schema::dropIfExists('juno_tokens');
    }
}
