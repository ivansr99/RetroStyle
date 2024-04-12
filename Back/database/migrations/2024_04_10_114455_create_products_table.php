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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name');
            $table->string('Description', 500); // Aumento de longitud a 500 caracteres
            $table->decimal('Price');
            $table->decimal('Taxes');
            $table->string('Image')->nullable();
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('Category_id');
            $table->unsignedInteger('Color_id');
            $table->unsignedInteger('Size_id');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('Category_id')->references('ID_category')->on('categories');
            $table->foreign('Color_id')->references('ID_color')->on('colors');
            $table->foreign('Size_id')->references('Id')->on('sizes');
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
