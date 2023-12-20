<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Restaurant::create([
            'user_id' => 4, // Assuming the ID of the Restaurant user is 4
            'name' => 'Tasty Restaurant',
            'location' => '456 Oak Avenue',
            'cuisine_type' => 'Italian',
            'contact_email' => 'hello@tastyrestaurant.com',
            'contact_phone' => '+1122334455',
        ]);
        // Add more restaurants as needed
    }
}
