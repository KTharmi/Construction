<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabourAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('LabId')->index()->unique();
            $table->unsignedBigInteger('ProId')->index()->unique();
            $table->double('WorkingHours',4,2);
            $table->double('Salary',8,2);
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
        Schema::dropIfExists('_labour__assignments');
    }
}
