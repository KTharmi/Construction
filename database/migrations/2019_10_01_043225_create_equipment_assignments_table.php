<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('EquipId')->index()->unique();
            $table->unsignedBigInteger('ProId')->index()->unique();
            $table->double('duration',4,2);
            $table->enum('is_active', ['Yes', 'No']);
            $table->timestamps();

            $table->foreign('EquipId')
            ->references('EquipId')->on('equipments')
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
        Schema::dropIfExists('_equipment__assignments');
    }
}
