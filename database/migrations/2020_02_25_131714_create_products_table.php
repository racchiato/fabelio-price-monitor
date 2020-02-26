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
            $table->bigIncrements('id');
            $table->string('url');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
        });

        Schema::create('prices', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('price');
            $table->text('description');

            $table->foreign('product_id')
                  ->references('id')->on('products')
                  ->onDelete('cascade');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('url');

            $table->foreign('product_id')
                  ->references('id')->on('products')
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('prices');
        Schema::dropIfExists('images');
    }
}
