<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GenderSeeder;
use Database\Seeders\ReligionSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\FamilyRelationshipSeeder;
use Database\Seeders\JobListSeeder;
use Database\Seeders\MaritalStatusSeeder;
use Database\Seeders\BloodTypeSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            ReligionSeeder::class,
            EducationSeeder::class,
            FamilyRelationshipSeeder::class,
            JobListSeeder::class,
            MaritalStatusSeeder::class,
            BloodTypeSeeder::class,
        ]);
    }
}
