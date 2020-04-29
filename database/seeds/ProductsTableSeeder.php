<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => "2 bed flat for sale",
                'description' => 'This is a fantastic opportunity to own a rare to the market third floor two bedroom/two bathroom apartment which has picturesque views over the River Lea and Millfields Park.',
                'units' => 100,
                'price' => 550000,
                'image' => 'https://lid.zoocdn.com/645/430/f37c47836becef00fc8338b6830533e96f00b864.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "2 Bed Flat, SW5 ",
                'description' => 'A delightful split-level apartment arranged over the ground and first floors. ',
                'units' => 100,
                'price' => 1200000,
                'image' => 'https://lid.zoocdn.com/645/430/1855a4f5d19633b34c14be7ce03c60087a0c5e95.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Hyde Park 3 bed flat for sale",
                'description' => 'Stunning three bedroom penthouse apartment for sale in W2 - Owing to our commitment to keep both our colleagues and clients safe during this period of recommended isolation, we have many self-serve viewing options available to you. These include video ',
                'units' => 100,
                'price' => 1600000,
                'image' => 'https://lid.zoocdn.com/645/430/d8ea99963719be9603077d07b84c2e966a30a069.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Studio for sale',
                'description' => 'to Hyde Park and Marble Arch Underground Station. Porter and lift. 129 year lease. Leasehold.',
                'units' => 10,
                'price' => 100,
                'image' => 'https://lid.zoocdn.com/645/430/718d2a768c5aa0b8809ab5b9aebb2041438dc42c.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
        ];
        
        DB::table('products')->insert($products);
    }
}
