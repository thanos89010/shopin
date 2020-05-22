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
            "slug"=>"Phone"
           
        ]);

        Category::create([
            "name"=>"Laptop",
            "body"=>"Laptop Laptop",
            "slug"=>"Laptop"
        ]);
        Category::create([
            "name"=>"Desktop",
            "body"=>"Desktop Desktop",
            "slug"=>"Desktop"
        ]);
        Category::create([
            "name"=>"dell",
            "body"=>"dell dell",
            "slug"=>"dell",
            "parent_id"=>2
        ]);

        Category::create([
            "name"=>"MacBook",
            "body"=>"MacBook MacBook",
            "slug"=>"MacBook",
            "parent_id"=>2
        ]);

        Category::create([
            "name"=>"Iphone",
            "body"=>"Iphone Iphone",
            "slug"=>"Iphone",
            "parent_id"=>1
        ]);

    }
}
