<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('TaskId')->index();
            $table->unsignedBigInteger('Qty')->nullable();
            $table->unsignedBigInteger('amount');
            $table->timestamps();

            $table->foreign('TaskId')
            ->references('id')->on('works')
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
        Schema::dropIfExists('dtasks');
    }
}
