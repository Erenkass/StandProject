<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'Pratik Shop E-ticaret',
            'content'=>'Hakkınızda yazısı burada',
            'text_1_icon'=>'icon-truck',
            'text_1'=>'Ücretsiz Kargo',
            'text_1_content'=>'Ürünlerinize ücretsiz kargo sağlarız',
            'text_2_icon'=>'icon-refresh2',
            'text_2'=>'Geri iade',
            'text_2_content'=>'30 gün içinde geri iade sağlarız.'
        ]);
    }
}
