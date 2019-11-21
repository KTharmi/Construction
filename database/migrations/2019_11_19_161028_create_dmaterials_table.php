<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmaterials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('MatId')->index()->unique();
            $table->unsignedBigInteger('Qty')->nullable();
            $table->unsignedBigInteger('amount')->nullable();
            $table->timestamps();

            $table->foreign('MatId')
            ->references('id')->on('materials')
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
        Schema::dropIfExists('dmaterials');
    }
}
