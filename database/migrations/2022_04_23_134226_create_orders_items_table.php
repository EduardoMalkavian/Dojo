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
            $table->unsignedInteger('seq');
            $table->unsignedInteger('orders_id');
            $table->unsignedInteger('products_id');
            $table->unsignedDouble('quantity');
            $table->unsignedDouble('value');
            $table->unsignedDouble('discount');
            $table->unsignedDouble('perc_discount');
            $table->timestamps();
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->foreign('products_id')->references('id')->on('products');
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
