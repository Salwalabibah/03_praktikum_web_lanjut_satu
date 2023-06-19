<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product = [
            [
                'prodName' => 'Jaket Anti Badai',
                'descName' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nesciunt!',
                'image' => 'product_02.jpg',
                'price' => 10000000
            ],
            [
                'prodName' => 'Sepatu Boots',
                'descName' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nesciunt!',
                'image' => 'product_01.jpg',
                'price' => 200000
            ]
        ];

        DB::table('products')->insert($product);
    }
}
