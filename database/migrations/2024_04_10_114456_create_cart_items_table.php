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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Session_id');
            $table->unsignedInteger('Product_id');
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign('Session_id')->references('id')->on('shopping_sessions');
            $table->foreign('Product_id')->references('Id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
