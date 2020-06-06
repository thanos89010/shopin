<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Order::create([
            "user_id"=>1,
            "total"=>1499.990000,
            "item_count"=>4,
            "first_name"=>"Θανος",
            "last_name"=>"Ταλαριδης",
            "email"=>"thanos@gmail.com",
            "address"=>"Μουσων 84",
            "city"=>"θεσσαλονικη",
            "country"=>"Ελλαδα",
            "post_code"=>56224,
            "phone_number"=>6985075262
        ]);

        Order::create([
            "user_id"=>2,
            "total"=>7799.950000,
            "item_count"=>2,
            "first_name"=>"Μαρια",
            "last_name"=>"Φιλιππιδου",
            "email"=>"maria@gmail.com",
            "address"=>"Πλαταιων 3",
            "city"=>"θεσσαλονικη",
            "country"=>"Ελλαδα",
            "post_code"=>56224,
            "phone_number"=>6987565933,
            "notes"=>"Παραδοση μετα τις 5"
        ]);

    }
}
