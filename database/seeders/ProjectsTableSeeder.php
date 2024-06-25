<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(3);
            $newProject->content = $faker->text(500);
            $newProject->start_date = $faker->date();
            $newProject->end_date = $faker->date();
            $newProject->slug = Str::slug($newProject->title);
            $newProject->save();
        }
    }
}
