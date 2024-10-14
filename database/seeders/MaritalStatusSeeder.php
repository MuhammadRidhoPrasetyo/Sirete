<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maritalStatuses = [
            ['name' => 'Belum Kawin'],
            ['name' => 'Kawin'],
            ['name' => 'Cerai Hidup'],
            ['name' => 'Cerai Mati'],
        ];

        foreach ($maritalStatuses as $status) {
            MaritalStatus::create($status);
        }
    }
}
