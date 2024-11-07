<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ExerciseTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $exercises = Exercise::all();

        $technologies = Technology::all()->pluck("id");

        foreach ( $exercises as $exercise ) {
            $exercise->technologies()->attach($faker->randomElements($technologies, 2));
        }
    }
}
