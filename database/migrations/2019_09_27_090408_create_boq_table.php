<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('particulars',50)->unique();
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('Iid');
            $table->timestamps();

            $table->foreign('Iid')
            ->references('Iid')->on('bsr')
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
        Schema::dropIfExists('boq');
    }
}
