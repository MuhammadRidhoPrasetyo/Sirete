<?php

namespace Database\Seeders;

use App\Models\BloodType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bloodTypes = [
            ['name' => 'A'],
            ['name' => 'B'],
            ['name' => 'AB'],
            ['name' => 'O'],
            ['name' => 'A+'],
            ['name' => 'A-'],
            ['name' => 'B+'],
            ['name' => 'B-'],
            ['name' => 'AB+'],
            ['name' => 'AB-'],
            ['name' => 'O+'],
            ['name' => 'O-'],
            ['name' => 'TIDAK TAHU'],
        ];

        foreach ($bloodTypes as $bloodType) {
            BloodType::create($bloodType);
        }
    }
}
