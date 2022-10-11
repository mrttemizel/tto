<?php

namespace Database\Seeders;

use App\Models\back\Durum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjeDurumuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $durums = [
            [
                'durum' => 'Tamamlandı',
            ],
            [
                'durum' => 'Devam Ediyor',
            ]

        ];

        foreach ($durums as $durum) {
            Durum::create($durum);
        }
    }
}
