<?php

namespace Database\Seeders;

use App\Models\FamilyRelationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilyRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $familyRelationships = [
            ['name' => 'Kepala Keluarga'],
            ['name' => 'Suami'],
            ['name' => 'Istri'],
            ['name' => 'Anak'],
            ['name' => 'Menantu'],
            ['name' => 'Cucu'],
            ['name' => 'Orang Tua'],
            ['name' => 'Mertua'],
            ['name' => 'Famili Lain'],
            ['name' => 'Pembantu'],
            ['name' => 'Lainnya'],
        ];

        foreach ($familyRelationships as $relationship) {
            FamilyRelationship::create($relationship);
        }
    }
}
