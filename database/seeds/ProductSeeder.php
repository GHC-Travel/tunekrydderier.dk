<?php

use App\Product;
use App\ProductPrice;
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
        Product::query()->insert([
            [
                'category_id' => 1,
                'stock' => 50,
                'name' => 'Special Black Tea blend',
                'photo_url' => 'https://cdn8.bigcommerce.com/s-jl3t5tg/images/stencil/1280x1280/products/99/2025/organic-earl-grey-black-tea__12210.1501613640.png',
            ],
            [
                'category_id' => 1,
                'stock' => 500,
                'name' => 'Earl Gray Tea blend',
                'photo_url' => 'https://cdn8.bigcommerce.com/s-jl3t5tg/images/stencil/1280x1280/products/99/2025/organic-earl-grey-black-tea__12210.1501613640.png',
            ],
            [
                'category_id' => 1,
                'stock' => 500,
                'name' => 'Green tea blend',
                'photo_url' => 'https://cdn8.bigcommerce.com/s-jl3t5tg/images/stencil/1280x1280/products/99/2025/organic-earl-grey-black-tea__12210.1501613640.png',
            ],
            [
                'category_id' => 2,
                'stock' => 100,
                'name' => 'Dried chili flakes',
                'photo_url' => 'https://images-na.ssl-images-amazon.com/images/I/81Vv-dbh2EL.jpg',
            ],
        ]);

        foreach(Product::cursor() as $product) {
            factory(ProductPrice::class)->times(rand(1,3))->create([
                'product_id' => $product->id
            ]);
        }
    }
}
