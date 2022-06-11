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
        Schema::create('orders_items', function (Blueprint $table) {
            $table->unsignedInteger('seq')->primary();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->unsignedDouble('quantity');
            $table->unsignedDouble('value')->nullable();
            $table->unsignedDouble('discount')->nullable();
            $table->unsignedDouble('perc_discount')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_items');
    }
};
