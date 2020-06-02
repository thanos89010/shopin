<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Product::create([
            'name' => 'MacBook Pro 15',
            'slug' => 'MacBook-Pro-15',
            'details' => '15 inch, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'Πιο ισχυρό από ποτέ, το MacBook Pro έρχεται με επεξεργαστή Intel Core i9 9ης γενιάς, εκθαμβωτική οθόνη Retina με τεχνολογία TrueTone, γραφικά Radeon Pro 560X 4GB, 512GB SSD και 16GB RAM DDR4',
            'quantity' => 30,
            'category_id' => 5,
            "parent_id"=>2

        ]);
        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 inch, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'To Dell Vostro 3471 SFF i3 έρχεται με επεξεργαστή Intel® Core™ 9ης Γενιάς, 4GB μνήμης RAM DDR4, αποθηκευτική μονάδα HDD στα 1TB και Windows 10 Pro για αυξημένη παραγωγικότητα!',
            'quantity' => 0,
            "product_status"=>0,
            'category_id' => 4,
            "parent_id"=>2

        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 inch, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'Το iPhone 11 Pro Max έρχεται με τριπλή πίσω κάμερα για μοναδικές λήψεις, οθόνη Super Retina XDR 6,5"" τεχνολογίας OLED, τον πανίσχυρο επεξεργαστή A13 Bionic και ταχύτερη αναγνώριση προσώπου Face ID',
            'quantity' => 2,
            'category_id' => 6,
            "parent_id"=>1

        ]);

        Product::create([
            'name' => 'Dell Inspiron 5490 i7',
            'slug' => 'Dell-Inspiron-5490-i7',
            'details' => 'Core i7 10510U/12 GB/512 GB/GeForce MX230 2 GB',
            'price' => 949.99,
            'shipping_cost' => 21,
            'description' => 'Απίστευτη ισχύς για περισσότερη δημιουργία, με επεξεργαστή Intel® Core™ 10ης γενιάς, κάρτα γραφικών NVIDIA GeForce MX230 2GB, οθόνη 14” Full HD, 12GB μνήμης RAM DDR4 και NVMe M.2 SSD στα 512GB!',
            'quantity' => 32,
            'category_id' => 4,
            "parent_id"=>2

        ]);

        Product::create([
            'name' => 'Dell Inspiron',
            'slug' => 'Dell-Inspiron',
            'details' => 'Intel Core i5 1035G1 1.0 GHz 2GB',
            'price' => 899.99,
            'shipping_cost' => 15,
            'description' => 'Απίστευτη ισχύς για περισσότερη δημιουργία, με επεξεργαστή Intel® Core™ 10ης γενιάς, κάρτα γραφικών Intel® UHD Graphics , οθόνη 15,6” Full HD, 8GB μνήμης RAM DDR4 και NVMe™ M.2 SSD στα 256GB!',
            'quantity' => 14,
            'category_id' => 4,
            "parent_id"=>2

        ]);
        Product::create([
            'name' => 'Dell XPS 7590',
            'slug' => 'Dell-XPS-7590',
            'details' => 'Core i7 9750H/8 GB/256 GB/GTX 1650 4 GB',
            'price' => 2099.99,
            'shipping_cost' => 21,
            'description' => 'Ο ισχυρός Intel® Core™ i7-9750H, σε συνδυασμό με την GeForce GTX 1650 4GB, τα 8GB μνήμης RAM DDR4 και την InfinityEdge FHD οθόνη των 15,6” συνθέτουν ένα πανίσχυρο φορητό σύστημα!',
            'quantity' => 8,
            'category_id' => 4,
            "parent_id"=>2

        ]);

        Product::create([
            'name' => 'Apple MacBook Air Retina Gold',
            'slug' => 'Apple-MacBook-Air-Retina-Gold',
            'details' => 'Core i5/8 GB/512 GB',
            'price' => 1649.99,
            'shipping_cost' => 12,
            'description' => 'Το απίστευα λεπτό MacBook Air ισχυρότερο από ποτέ, με Magic Keyboard, οθόνη Retina με τεχνολογία True Tone, διπλάσιο αποθηκευτικό χώρο είναι ο ορισμός του φορητού υπολογιστή',
            'quantity' => 8,
            'category_id' => 5,
            "parent_id"=>2

        ]);
        Product::create([
            'name' => 'Apple MacBook Air Retina',
            'slug' => 'Apple-MacBook-Air-Retina',
            'details' => 'Core i5/32 GB/256',
            'price' => 1299.99,
            'shipping_cost' => 12,
            'description' => 'Το αγαπημένο MacBook Air λεπτότερο και ελαφρύτερο από ποτέ με οθόνη Retina και τεχνολογία True Tone, πανίσχυρους επεξεργαστές είναι ο ορισμός του φορητού υπολογιστή',
            'quantity' => 18,
            'category_id' => 5,
            "parent_id"=>2

        ]);
        Product::create([
            'name' => 'Apple MacBook Air 13',
            'slug' => 'Apple-MacBook-Air-13',
            'details' => 'Core i5/4 GB/256 GB',
            'price' => 1549.99,
            'shipping_cost' => 18,
            'description' => 'Απίστευτα ελαφρύ και απίστευτα λεπτό MacBook Air, με μπαταρία που κρατάει 12 συνεχόμενες ώρες, φωτιζόμενο keyboard και μεγάλες ταχύτητες μεταφοράς δεδομένων',
            'quantity' => 11,
            'category_id' => 5,
            "parent_id"=>2

        ]);



        
    }
}
