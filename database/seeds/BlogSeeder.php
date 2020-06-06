<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            "user_id"=>1,
            "title"=>"Overcooked: Δωρεάν στο Epic Games Store μέχρι και τις 11 Ιουνίου!",
            "body"=>"Το cooking simulation Overcooked των Ghost Town Games/Team17 είναι το νέο δωρεάν παιχνίδι του Epic Games Store και θα παραμείνει στο ηλεκτρονικό κατάστημα της αμερικανικής εταιρείας μέχρι και τις 11 Ιουνίου! 

            Βραβευμένο με τα Best British Game Award 2016 και Best Family Game Award 2016, το Overcooked μας μεταφέρει στο Onion Kingdom, όπου θα αναλάβουμε το ρόλο του σεφ, θα μαγειρέψουμε, θα κάνουμε λάντζα, θα συνεργαστούμε με τους συμπαίκτες μας (προσφέρει co-op για έως και 4 παίκτες) και θα νιώσουμε την πίεση μίας «επαγγελματικής» κουζίνας – προσπαθώντας να περάσουμε στην επόμενη πίστα.
            
            Tο Epic Vault θα ανοίξει ξανά στις 11 Ιουνίου, αποκαλύπτοντας το επόμενο δωρεάν “Mystery Game”."
        ]);

        Blog::create([
            "user_id"=>1,
            "title"=>"AMD Ryzen C7: Με RDNA-based γραφικά για φορητές συσκευές!",
            "body"=>"Σύμφωνα με πρόσφατες διαρροές, η AMD σχεδιάζει ένα νέο ισχυρό ARM SoC – εν ονόματι AMD Ryzen C7 – μέσω του οποίου θα εισάγει την αρχιτεκτονική γραφικών RDNA στις έξυπνες φορητές συσκευές!

            Η διαρροή εντοπίστηκε από έναν χρήστη του Twitter (HansDeVriesNL), ο οποίος δημοσίευσε μία φωτογραφία με τα χαρακτηριστικά του: θα είναι 8πύρηνο, θα κατασκευάζεται με τη διαδιακασία ολοκληρωσης 5nm της TSMC, θα ενσωματώνει δύο “Pro Mobile Cores” Cortex-X1 με συχνότητα έως και 3GHz, δύο πυρήνες Cortex-A78 με συχνότητα έως και 2.6GHz, καθώς και τέσσερις πυρήνες Cortex-A55 με συχνότητα έως και 2GHz."
        ]);
    }
}
