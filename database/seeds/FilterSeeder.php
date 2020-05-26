<?php

use App\Filter;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Filter::create([
            "type"=>"ram"
        ]);
        Filter::create([
            "type"=>"rom"
        ]);
    }
}
