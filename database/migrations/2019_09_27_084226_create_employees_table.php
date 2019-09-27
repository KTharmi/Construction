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
            $table->bigIncrements('Eid');
            $table->string('Ename',50);
            $table->string('Eaddress',50);
            $table->unsignedBigInteger('EphoneNo');
            $table->unsignedBigInteger('Cid');
            $table->timestamps();

            $table->foreign('Cid')
            ->references('id')->on('companies')
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
        Schema::dropIfExists('employees');
    }
}
