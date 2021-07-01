<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechantRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  
    {
        Schema::create('merchant_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_email');   
            $table->integer('status')->comments('1 : Approve, -1 : Cancelled/ Reject')->default('0');
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
        Schema::dropIfExists('merchant_requests');
    }
}
