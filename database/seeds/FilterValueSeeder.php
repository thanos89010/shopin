<?php

use App\FilterValue;
use Illuminate\Database\Seeder;

class FilterValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FilterValue::create([
            "value"=>"2 GB",
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>"4 GB",
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>"8 GB",
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>"12 GB",
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>"32 GB",
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>"64 GB",
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>"128 GB",
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>"256 GB",
            "filter_id"=>2
        ]);
    }
}
