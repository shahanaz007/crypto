<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferenceToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('myrefercode')->after('available_tokens')->unique();  
            $table->bigInteger('referby')->after('myrefercode')->nullable();  
            $table->integer('level')->after('referby')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('myrefcode');
            $table->dropColumn('referby');
            $table->dropColumn('level');
        });
    }
}
