<?php

use App\Product;
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
        //

        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro',
            'quantity' => 30,

        ]);
        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 inch, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557',
            'quantity' => 0,
            "product_status"=>0

        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 inch, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro',
            'quantity' => 2,

        ]);
    }
}
