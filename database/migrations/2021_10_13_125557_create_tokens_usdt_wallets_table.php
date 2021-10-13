<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensUsdtWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens_usdt_wallets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('coin', ['token','usdt']);
            $table->decimal('credit', 12, 2)->default(0.00);
            $table->decimal('debit', 12, 2)->default(0.00);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('tokens_usdt_wallets');
    }
}
