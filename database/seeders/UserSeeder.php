<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'AdminTest',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpassword'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'CharityUserTest',
            'email' => 'charity@example.com',
            'password' => bcrypt('charitypassword'),
            'role' => 'charity',
        ]);

        User::create([
            'name' => 'StoreUserTest',
            'email' => 'store@example.com',
            'password' => bcrypt('storepassword'),
            'role' => 'store',
        ]);

        User::create([
            'name' => 'RestaurantUserTest',
            'email' => 'restaurant@example.com',
            'password' => bcrypt('restaurantpassword'),
            'role' => 'restaurant',
        ]);
    }
}
