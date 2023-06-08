<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('meal_name')->nullable();
            $table->string('first_product')->nullable();
            $table->string('first_product_image')->nullable();
            $table->string('second_product')->nullable();
            $table->string('second_product_image')->nullable();
            $table->string('third_product')->nullable();
            $table->string('third_product_image')->nullable();
            $table->string('fourth_product')->nullable();
            $table->string('fourth_product_image')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('meals');
    }
};
