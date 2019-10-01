<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabourersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labourers', function (Blueprint $table) {
            $table->bigIncrements('LabId');
            $table->string('LabName',50);
            $table->string('LabType',50);
            $table->double('Salary',8,2);
            $table->unsignedBigInteger('LabPhoneNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_labourers');
    }
}
