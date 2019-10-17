<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_bill__project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ProId')->index()->unique();
            $table->string('category');
            $table->date('date');
            $table->unsignedBigInteger('projectedSubtotal');
            $table->unsignedBigInteger('actualSubtotal');
            $table->unsignedBigInteger('currentPaid');
            $table->unsignedBigInteger('amountDue');
            $table->timestamps();

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
        Schema::dropIfExists('_bill__project');
    }
}
