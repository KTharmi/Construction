<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('BillNO');
            $table->double('Total',8,2);
            $table->unsignedBigInteger('CustId');
            $table->date('PaidAt');
            $table->double('Amount',8,2);
            $table->double('Due',8,2);

            $table->timestamps();

            $table->foreign('CustId')
            ->references('CustId')->on('customers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_payment');
    }
}
