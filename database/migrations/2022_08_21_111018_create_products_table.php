<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->unsignedInteger('total_stock');
            $table->unsignedInteger('sold')->default(0);
            $table->unsignedInteger('available_stock')->nullable();
            $table->unsignedInteger('regular_price');
            $table->unsignedInteger('discounted_price')->default(0);
            $table->unsignedInteger('current_price');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
