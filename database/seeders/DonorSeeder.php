<?php

namespace Database\Seeders;

use App\Models\Donor;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $donors = [
            ['user_id' => '8', 'name' => 'بابا غنوج النعيم', 'type' => 'restaurant', 'cuisin_type' => 'arabic', 'location' => 'الرياض', 'contact_email' => 'baba_ghanoj@email.com', 'contact_phone' => '02255'],
            ['user_id' => '9', 'name' => 'مهرجان الكباب', 'type' => 'restaurant', 'cuisin_type' => 'amirearabiccan', 'location' => 'الرياض', 'contact_email' => 'kabab@email.com', 'contact_phone' => '02266'],
            ['user_id' => '10', 'name' => 'لذة الدولمة', 'type' => 'restaurant', 'cuisin_type' => 'amirecan', 'location' => 'جدة', 'contact_email' => 'doumah@email.com', 'contact_phone' => '02277'],
            ['user_id' => '11', 'name' => 'لوحة', 'type' => 'store', 'cuisin_type' => 'null', 'location' => 'جدة', 'contact_email' => 'loha@email.com', 'contact_phone' => '02288'],
        ];

        foreach ($donors as  $donor) {

            $imageUrl = 'donors_images/' . str_replace(' ', '_', strtolower($donor['name'])) . '.jpg';

            Donor::create([
                'user_id' => $donor['user_id'],
                 'name' => $donor['name'],
                 'type' => $donor['type'],
                 'cuisine_type' => $donor['cuisin_type'],
                 'image'=> $imageUrl,
                 'location' => $donor['location'],
                 'contact_email' => $donor['contact_email'],
                 'contact_phone' => $donor['contact_phone']],
            );
        }
    }
}
