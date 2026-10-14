<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['category_id' => 1, 'name' => 'Kartupeļi', 'price' => 0.89]);
        Product::create(['category_id' => 1, 'name' => 'Burkāni', 'price' => 0.69]);
        Product::create(['category_id' => 2, 'name' => 'Āboli', 'price' => 1.49]);
        Product::create(['category_id' => 2, 'name' => 'Banāni', 'price' => 1.19]);
        Product::create(['category_id' => 3, 'name' => 'Ūdens', 'price' => 0.59]);
        Product::create(['category_id' => 3, 'name' => 'Sula', 'price' => 1.99]);
    }
}
