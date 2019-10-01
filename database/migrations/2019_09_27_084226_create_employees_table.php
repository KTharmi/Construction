<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('EmpId');
            $table->string('EmpName',50);
            $table->string('EmpAddress',50);
            $table->unsignedBigInteger('EmpPhoneNo');
            $table->unsignedBigInteger('UserId');

            $table->foreign('UserId')
            ->references('id')->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
