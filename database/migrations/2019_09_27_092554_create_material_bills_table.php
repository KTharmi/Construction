<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Mid');
            $table->unsignedBigInteger('Billid');
            $table->timestamps();

            $table->foreign('Mid')
            ->references('Mid')->on('materials')
            ->onDelete('cascade');

            $table->foreign('Billid')
            ->references('id')->on('bills')
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
        Schema::dropIfExists('material_bills');
    }
}
