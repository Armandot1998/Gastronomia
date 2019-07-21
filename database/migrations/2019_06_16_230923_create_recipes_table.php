<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('recipe_name', 100);
            $table->integer('recipe_document_no');
            $table->string('recipe_preparedness', 200);
            $table->integer('recipe_pax');
            $table->string('recipe_state',10);
            $table->integer('techniques_id');
            $table->foreign('techniques_id')->references("id")->on("techniques");



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
