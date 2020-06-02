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
        
        ProductFilter::create([
            "product_id"=>1,
            "filter_value_id"=>5
        ]);
        ProductFilter::create([
            "product_id"=>2,
            "filter_value_id"=>3
        ]);
  
        ProductFilter::create([
            "product_id"=>4,
            "filter_value_id"=>4
        ]);
  
        ProductFilter::create([
            "product_id"=>5,
            "filter_value_id"=>1
        ]);
  
        ProductFilter::create([
            "product_id"=>6,
            "filter_value_id"=>3
        ]);
        ProductFilter::create([
            "product_id"=>7,
            "filter_value_id"=>3
        ]);
        ProductFilter::create([
            "product_id"=>8,
            "filter_value_id"=>5
        ]);
        ProductFilter::create([
            "product_id"=>9,
            "filter_value_id"=>2
        ]);
  
  
    }
}
