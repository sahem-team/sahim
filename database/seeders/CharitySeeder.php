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
        $charities = [
            ['user_id' => '2', 'name' => 'جمعية الرعاية الاجتماعية',   'service_area' => 'الرياض', 'contact_email' => 'info@jamiat-alriayah.org', 'contact_phone' => '02255'],
            ['user_id' => '3', 'name' => 'مؤسسة الشباب المبدع ',   'service_area' => 'الرياض', 'contact_email' => 'contact@mosasat-alshabab.com', 'contact_phone' => '02266'],
            ['user_id' => '4', 'name' => 'الهلال الأحمر الإنساني ',   'service_area' => 'جدة', 'contact_email' => 'support@alhilal-alinsani.org', 'contact_phone' => '02277'],
            ['user_id' => '5', 'name' => 'مركز الغذاء المساعد', 'service_area' => 'جدة', 'contact_email' => 'help@markaz-alghidaa.com', 'contact_phone' => '02288'],
            ['user_id' => '6', 'name' => 'جمعية رعاية الطفولة المستقبلية', 'service_area' => 'جدة', 'contact_email' => 'outreach@jamiat-raiat-altifoul.org', 'contact_phone' => '02288'],
            ['user_id' => '7', 'name' => 'مؤسسة النهضة الاجتماعية', 'service_area' => 'جدة', 'contact_email' => 'community@mosasat-alnahda.org', 'contact_phone' => '02288'],
        ];

        foreach ($charities as  $charity) {

            $imageUrl = 'donors_images/' . str_replace(' ', '_', strtolower($charity['name'])) . '.jpg';

            Charity::create(
                [
                    'user_id' => $charity['user_id'],
                    'name' => $charity['name'],
                    'image' => $imageUrl,
                    'service_area' => $charity['service_area'],
                    'contact_email' => $charity['contact_email'],
                    'contact_phone' => $charity['contact_phone']
                ],
            );
        }
    }
}
