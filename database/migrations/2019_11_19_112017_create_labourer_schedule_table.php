<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabourerScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labourer_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('LabId')->index()->unique();
            $table->unsignedBigInteger('ProId')->index()->unique();
            $table->date('WorkingDate');
            $table->timestamps();

            $table->foreign('LabId')
            ->references('id')->on('labourers')
            ->onDelete('cascade');

            $table->foreign('ProId')
            ->references('id')->on('Projects')
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
        Schema::dropIfExists('labourer_schedule');
    }
}
