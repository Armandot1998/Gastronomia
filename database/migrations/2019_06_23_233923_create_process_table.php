<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('process_description', 100);
            $table->integer('process_order');
            $table->string('process_state',10);
            $table->integer('recipes_id');
            $table->foreign('recipes_id')->references("id")->on("recipes");





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_process');
    }
}
