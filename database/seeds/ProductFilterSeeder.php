<?php

use App\ProductFilter;
use Illuminate\Database\Seeder;

class ProductFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductFilter::create([
            "product_id"=>1,
            "filter_value_id"=>3
        ]);
        ProductFilter::create([
            "product_id"=>1,
            "filter_value_id"=>7
        ]);
        ProductFilter::create([
            "product_id"=>2,
            "filter_value_id"=>4
        ]);
        ProductFilter::create([
            "product_id"=>2,
            "filter_value_id"=>8
        ]);
    }
}
