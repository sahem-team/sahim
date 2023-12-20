<?php

namespace Database\Seeders;

use App\Models\Charity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Charity::create([
            'user_id' => 2, // Assuming the ID of the Charity user is 2
            'name' => 'ABC Charity',
            'service_area' => 'Local community',
            'contact_email' => 'contact@abccharity.org',
            'contact_phone' => '+123456789',
        ]);
    }
}
