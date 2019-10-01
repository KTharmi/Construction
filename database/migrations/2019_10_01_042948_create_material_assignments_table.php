<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('MatId')->index()->unique();
            $table->unsignedBigInteger('ProId')->index()->unique();
            $table->unsignedBigInteger('Qty');
            $table->timestamps();

            $table->foreign('MatId')
            ->references('MatId')->on('materials')
            ->onDelete('cascade');

            $table->foreign('ProId')
            ->references('ProId')->on('Projects')
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
        Schema::dropIfExists('_material__assignments');
    }
}
