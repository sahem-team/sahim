<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Donation::create([
            'user_id' => 3,
            'donation_type' => 'store',
            'donator_id'=>1,
            'donation_name' => 'Canned Food',
            'description' => 'Various canned goods',
            'quantity_type' => 'bag',
            'quantity' => 50,
            'expiration_date' => '2023-12-31',
            'status' => 'listed',
        ]);
        // Add more store donations as needed
    }
}
