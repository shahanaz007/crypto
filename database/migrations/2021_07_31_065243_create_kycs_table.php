<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('pancard_no');
            $table->string('pancard_img');
            $table->integer('idcard_no');
            $table->string('idcard_img');
            $table->integer('status')->comments('1 : Approved, -1 : Rejected, 0 : Pending ' )->default('0');
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
        Schema::dropIfExists('kycs');
    }
}
