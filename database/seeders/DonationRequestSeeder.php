<?php

namespace Database\Seeders;

use App\Models\DonationRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DonationRequest::create([
            'charity_id' => 1, // Assuming the ID of the Charity is 1
            'donation_id' => 1, // ID of the donation
            'status' => 'pending',
        ]);
    }
}
