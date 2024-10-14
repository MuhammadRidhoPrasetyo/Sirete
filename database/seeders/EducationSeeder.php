<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            ['name' => 'Tidak / Belum Sekolah'],
            ['name' => 'Tidak Tamat SD / Sederajat'],
            ['name' => 'Tamat SD / Sederajat'],
            ['name' => 'SLTP / Sederajat'],
            ['name' => 'SLTA / Sederajat'],
            ['name' => 'Diploma I / II'],
            ['name' => 'Akademi / Diploma III / S.Muda'],
            ['name' => 'Diploma IV / Strata I'],
            ['name' => 'Strata II'],
            ['name' => 'Strata III'],
        ];

        foreach($educations as $education) {
            Education::create($education);
        }
    }
}
