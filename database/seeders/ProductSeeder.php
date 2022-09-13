<?php

namespace Database\Seeders;

use App\Enums\ProductCategories;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dd(ProductCategories::values());
        $product = Product::factory()->count(10)->make();
        dd($product);
    }
}
