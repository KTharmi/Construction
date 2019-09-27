<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('Pid');
            $table->string('Pname');
            $table->string('Paddress');
            $table->unsignedBigInteger('Cid');
            $table->unsignedBigInteger('Cusid');
            $table->timestamps();

            $table->foreign('Cid')
            ->references('id')->on('companies')
            ->onDelete('cascade');

            $table->foreign('Cusid')
            ->references('Cusid')->on('customers')
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
        Schema::dropIfExists('projects');
    }
}
