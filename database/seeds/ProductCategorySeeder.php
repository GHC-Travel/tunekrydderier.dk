<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::query()->insert([
            [
                'name' => 'Tea'
            ],
            [
                'name' => 'Spices'
            ]
        ]);
    }
}
