<?php

namespace Database\Seeders;


use App\Models\back\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [

                'email' => 'info@antalya.edu.tr',
                'adress' => 'Çıplaklı Mah. Akdeniz Bulvarı No:290 A Döşemealtı/Antalya',
                'title_tr' => 'Antalya Bilim Üniversitesi',
                'title_en' => 'Antalya Bilim University',
                'phone' => '+90 242 245 01 00',
                'facebook' => 'https://tr-tr.facebook.com/antalyauniversitesi/',
                'twitter' => 'https://twitter.com/antalyaunv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'instagram' => 'https://www.instagram.com/accounts/login/?next=/antalyauniversitesi/',
                'logo' => '1655902318.PNG',


            ]

        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
