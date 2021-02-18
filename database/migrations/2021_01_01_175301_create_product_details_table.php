<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pro');
            $table->foreign('id_pro')->references('id')->on('products');
            $table->float('price');
            $table->float('discount');
            $table->float('sale_price');
            $table->integer('quantity');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('id_size');
            // $table->foreign('id_size')->references('id')->on('sizes');
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
        Schema::dropIfExists('product_details');
    }
}
