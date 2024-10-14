<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            ['name' => 'L', 'description' => 'Laki-laki'],
            ['name' => 'P', 'description' => 'Perempuan'],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
