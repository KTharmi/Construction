<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_projects', function (Blueprint $table) {
            $table->bigIncrements('BillNo');
            $table->double('Total',8,2);
            $table->unsignedBigInteger('ProId');

            $table->timestamps();

            $table->foreign('ProId')
            ->references('ProId')->on('projects')
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
        Schema::dropIfExists('_bill__project');
    }
}
