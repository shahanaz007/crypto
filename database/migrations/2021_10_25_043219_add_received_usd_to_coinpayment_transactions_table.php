<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReceivedUsdToCoinpaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coinpayment_transactions', function (Blueprint $table) {
            $table->string('received_usd')->default(0)->after('recv_confirms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coinpayment_transactions', function (Blueprint $table) {
            $table->dropColumn('received_usd');
        });
    }
}
