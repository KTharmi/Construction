<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('BillNo',50)->unique();
            $table->string('describtion',100);
            $table->unsignedBigInteger('Bamount');
            $table->string('paticulars',50);
            $table->unsignedBigInteger('Pid');
            $table->unsignedBigInteger('Cusid');
            $table->timestamps();

            $table->foreign('paticulars')
            ->references('particulars')->on('boq')
            ->onDelete('cascade');

            $table->foreign('Pid')
            ->references('Pid')->on('projects')
            ->onDelete('cascade');

            $table->foreign('Cusid')
            ->references('Cusid')->on('customers')
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
        Schema::dropIfExists('bills');
    }
}
