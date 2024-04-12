<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('Product_id');
            $table->unsignedInteger('Order_id');
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign('Product_id')->references('Id')->on('products');
            $table->foreign('Order_id')->references('ID')->on('order_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
