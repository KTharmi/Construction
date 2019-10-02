<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_projects', function (Blueprint $table) {
            $table->bigIncrements('ProId');
            $table->string('ProName');
            $table->string('ProAddress');
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
        Schema::dropIfExists('_customer__project');
    }
}
