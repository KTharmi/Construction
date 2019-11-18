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
            $table->bigIncrements('id');
            $table->string('ProName');
            $table->string('ProAddress');
            $table->longtext('description');
            $table->date('proStartDate');
            $table->date('proEndDate')->nullable();
            $table->unsignedBigInteger('CustId');
            $table->enum('is_active', ['Yes', 'No']);
            $table->timestamps();

            $table->foreign('CustId')
            ->references('CustId')->on('customers')
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
