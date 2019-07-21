<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('ingredient_quantity');
            $table->string('ingredient_description', 500);
            $table->double('ingredient_cost',2);
            $table->integer('recipe_id');
            $table->integer('unit_id');
            $table->integer('product_id');
            $table->string('ingredient_state',10);
            $table->foreign('recipe_id')->references("id")->on("recipes");
            $table->foreign('unit_id')->references("id")->on("units");
            $table->foreign('product_id')->references("id")->on("products");






            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
