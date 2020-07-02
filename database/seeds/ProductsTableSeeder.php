<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            'name' => 'product1',
            'quantity' => rand(1,100),
            'price' => rand(1000, 100000),
            'category_id' => 1
        ];
        Product::create($data);
    }
}
