<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Photo::create([
            "url"=>"158974053064-2.jpg",
            "imageable_id"=>1,
            "imageable_type"=>"App\User"
        ]);

        Photo::create([
            "url"=>"dell.jpg",
            "imageable_id"=>2,
            "imageable_type"=>"App\Product"
        ]);

        Photo::create([
            "url"=>"iphone11.jpeg",
            "imageable_id"=>3,
            "imageable_type"=>"App\Product"
        ]);

        Photo::create([
            "url"=>"macbook.jpeg",
            "imageable_id"=>1,
            "imageable_type"=>"App\Product"
        ]);
        
    }
}
