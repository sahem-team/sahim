<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Store::create([
            'user_id' => 3, // Assuming the ID of the Store user is 3
            'name' => 'XYZ Store',
            'location' => '123 Main Street',
            'contact_email' => 'info@xyzstore.com',
            'contact_phone' => '+987654321',
        ]);
        // Add more stores as needed
    }
}
