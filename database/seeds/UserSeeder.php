<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "role_id"=>1,
            "first_name"=>"thanos",
            "user_name"=>"thanos89010",
            "last_name"=>"talaridis",
            "email"=>"thanos@gmail.com",
            "password"=> bcrypt("thanos")
        ]);
        User::create([
            "role_id"=>2,
            "first_name"=>"maria",
            "user_name"=>"parmaria",
            "last_name"=>"filipidou",
            "email"=>"maria@gmail.com",
            "password"=> bcrypt("maria")
        ]);

    }
}
