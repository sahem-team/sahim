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
        // Admin
        User::create([
            'name' => 'DemoAdmin',
            'email' => 'admintest@email.com',
            'password' => '00000000',
            'role' => 'admin',
        ]);

        // Charities
        User::create([
            'name' => 'Charity_1',
            'email' => 'charity_1@example.com',
            'password' => 'charitypassword',
            'role' => 'charity',
        ]);
        User::create([
            'name' => 'Charity_2',
            'email' => 'charity_2@example.com',
            'password' => 'charitypassword',
            'role' => 'charity',
        ]);
        User::create([
            'name' => 'Charity_3',
            'email' => 'charity_3@example.com',
            'password' => 'charitypassword',
            'role' => 'charity',
        ]);
        User::create([
            'name' => 'Charity_4',
            'email' => 'charity_4@example.com',
            'password' => 'charitypassword',
            'role' => 'charity',
        ]);
        User::create([
            'name' => 'Charity_6',
            'email' => 'charity_6@example.com',
            'password' => 'charitypassword',
            'role' => 'charity',
        ]);
        User::create([
            'name' => 'DemoCharity',
            'email' => 'charitytest@email.com',
            'password' => '000000',
            'role' => 'charity',
        ]);

        // donors:

        User::create([
            'name' => 'Donor_1',
            'email' => 'donor_1@example.com',
            'password' => 'donorpassword',
            'role' => 'donor',
        ]);
        User::create([
            'name' => 'Donor_2',
            'email' => 'donor_2@example.com',
            'password' => 'donorpassword',
            'role' => 'donor',
        ]);
        User::create([
            'name' => 'Donor_3',
            'email' => 'donor_3@example.com',
            'password' => 'donorpassword',
            'role' => 'donor',
        ]);
        User::create([
            'name' => 'DemoDonor',
            'email' => 'donortest@email.com',
            'password' => '000000',
            'role' => 'donor',
        ]);

    }
}
