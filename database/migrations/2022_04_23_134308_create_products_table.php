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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->unsignedDouble('price');
            $table->longText('description');
            $table->string('color',45);
            $table->unsignedDouble('quantity');
            $table->unsignedDouble('height');
            $table->unsignedDouble('width');
            $table->unsignedDouble('depth');
            $table->unsignedDouble('weight');
            $table->unsignedInteger('category_id');
            $table->boolean('active');
            $table->string('bulk_slug',2);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('bulk_slug')->references('slug')->on('bulks');
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
};
