<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Cart_Item;
use App\Models\Categories;
use App\Models\Colors;
use App\Models\Discount;
use App\Models\Form_sell;
use App\Models\Order_details;
use App\Models\Order_items;
use App\Models\Product;
use App\Models\ShoppingSession;
use App\Models\Sizes;
use App\Models\User;
use App\Models\Bill;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        Brand::factory()->count(10)->create();

        Categories::factory()->count(10)->create();

        Colors::factory()->count(10)->create();

        Sizes::factory()->count(10)->create();

        Discount::factory()->count(10)->create();

        Product::factory()->count(20)->create();

        ShoppingSession::factory()->count(10)->create();

        Cart_Item::factory()->count(20)->create();

        Form_sell::factory()->count(20)->create();

        Order_details::factory()->count(10)->create();

        Order_items::factory()->count(20)->create();

        Bill::factory()->count(10)->create();
    }
}
