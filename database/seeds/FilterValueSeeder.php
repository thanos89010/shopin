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
            "value"=>2,
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>4,
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>8,
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>12,
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>32,
            "filter_id"=>1
        ]);
        FilterValue::create([
            "value"=>32,
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>64,
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>128,
            "filter_id"=>2
        ]);
        FilterValue::create([
            "value"=>256,
            "filter_id"=>2
        ]);
    }
}
