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
            "url"=>"1591112333MacBookPro15.jpg",
            "imageable_id"=>1,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591108825Dell5490.jpg",
            "imageable_id"=>4,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591109167DellInspiron.jpg",
            "imageable_id"=>5,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591109234Dell7590.jpg",
            "imageable_id"=>6,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591124644AppleMacBookAirRetinaGold.jpg",
            "imageable_id"=>7,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591124681AppleMacBookAirRetina.jpg",
            "imageable_id"=>8,
            "imageable_type"=>"App\Product"
        ]);
        Photo::create([
            "url"=>"1591124708AppleMacBookAir13.jpg",
            "imageable_id"=>9,
            "imageable_type"=>"App\Product"
        ]);
        
    }
}
