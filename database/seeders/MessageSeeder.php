<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'is_user' => 0,
            'user_id' => null,
            'name' => 'نور',
            'email' => 'noor@email.com',
            'message' => "أحببت فكرة المنصة وأود أن أشارك ببعض الاقتراحات لتطويرها. هل هناك فرصة لتقديم اقتراحات تحسين لواجهة المستخدم أو آليات جديدة لتسهيل التبرعات وتوزيعها؟ أرجو النظر في هذه الاقتراحات وشكرًا لجهودكم المستمرة.",
        ]);
        Message::create([
            'is_user' => 1,
            'user_id' => 11,
            'name' => 'بدر',
            'email' => 'bade@email.com',
            'message' => "مرحبًا، أود الاستفسار حول كيفية التبرع بالطعام من مطعمنا لصالح المحتاجين. هل يمكنكم تقديم المزيد من المعلومات حول الخطوات اللازمة وكيفية التواصل معكم لهذا الغرض؟ شكرًا جزيلاً.",
        ]);

        Message::create([
            'is_user' => 0,
            'user_id' => null,
            'name' => 'ماجد',
            'email' => 'majid@email.com',
            'message' => "أنا طالب جامعي وأقوم ببحث عن مشروعات اجتماعية لإجراء مقابلات مع المسؤولين. هل يمكن ترتيب مقابلة مع أحد أعضاء فريقكم لمناقشة مشروع ساهم ودور الشباب في تنفيذه؟ أرجو الرد في أقرب وقت ممكن، شكراً.",
        ]);
    }
}
