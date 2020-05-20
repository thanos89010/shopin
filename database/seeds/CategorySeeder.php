<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            "name"=>"Phone",
            "body"=>"phone phone",
           
        ]);

        Category::create([
            "name"=>"Laptop",
            "body"=>"Laptop Laptop",
        ]);
        Category::create([
            "name"=>"Desktop",
            "body"=>"Desktop Desktop",
        ]);
        Category::create([
            "name"=>"Xiaomi",
            "body"=>"Xiaomi Xiaomi",
            "parent_id"=>1
        ]);

    }
}
