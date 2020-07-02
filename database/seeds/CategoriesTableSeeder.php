<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$data =[
       		[
       			'name' => 'Apple'
       		],
       		[
       			'name' => 'Samsung'
       		],
       		[
       			'name' => 'Sony'
       		]
       ];
       Category::insert($data);

    }
}
