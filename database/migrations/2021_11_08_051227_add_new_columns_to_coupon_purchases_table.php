<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToCouponPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coupon_purchases', function (Blueprint $table) {
            $table->string('brand_name')->after('user_id');
            $table->string('coupon_value')->after('brand_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupon_purchases', function (Blueprint $table) {
            $table->dropColumn('brand_name');
            $table->dropColumn('coupon_value');
            $table->dropColumn('coupon_id');
        });
    }
}
