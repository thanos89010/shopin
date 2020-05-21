<?php

use App\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderItem::create([
            "order_id"=>1,
            "product_id"=>3,
            "quantity"=>2,
            "price"=>1299.980000,
        ]);

        OrderItem::create([
            "order_id"=>1,
            "product_id"=>1,
            "quantity"=>2,
            "price"=>4999.980000,
        ]);

        OrderItem::create([
            "order_id"=>2,
            "product_id"=>3,
            "quantity"=>2,
            "price"=>1299.980000,
        ]);



    }
}
