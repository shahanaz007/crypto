<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('w_id');
            $table->string('amount');
            $table->string('currency_code');
            $table->string('address',500)->nullable();
            $table->integer('status')->dafault('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_withdrawals');
    }
}
