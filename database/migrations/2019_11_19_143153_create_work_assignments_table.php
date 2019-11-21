<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('TaskId')->index();
            $table->unsignedBigInteger('ProId')->index();
            $table->unsignedBigInteger('Qty')->nullable();
            $table->timestamps();

            $table->foreign('TaskId')
            ->references('id')->on('works')
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
        Schema::dropIfExists('work_assignments');
    }
}
