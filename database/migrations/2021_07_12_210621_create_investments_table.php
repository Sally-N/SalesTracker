<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->integer('capital')->default(0);
            $table->integer('workingcapital')->default(0);
            $table->integer('withdrawals')->default(0);
            $table->integer('sales')->default(0);
            $table->integer('profits')->default(0);

            /////FK///////
            // $table->integer('fkuser')->unsigned();
            $table->foreignId('fkuser')->references('id')->on('users');
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
        Schema::dropIfExists('investments');
    }
}
