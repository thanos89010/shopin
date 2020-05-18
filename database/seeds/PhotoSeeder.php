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
    }
}
