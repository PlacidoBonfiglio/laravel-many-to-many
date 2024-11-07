<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeNames = [
            "HTML", "CSS", "JavaScript", "Vue", "PHP", "Laravel"
        ];

        foreach ( $typeNames as $name ) {
            $newType = new Technology();
            $newType->name = $name;
            $newType->save();
        };
    }
}
