<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoqInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boq_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Invid');
            $table->unsignedBigInteger('pid');
            $table->timestamps();

            $table->foreign('Invid')
            ->references('Invid')->on('invoices')
            ->onDelete('cascade');

            $table->foreign('pid')
            ->references('id')->on('boq')
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
        Schema::dropIfExists('boq_invoices');
    }
}
