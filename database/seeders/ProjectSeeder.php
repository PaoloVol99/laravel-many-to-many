<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Type;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $type_ids = Type::all()->pluck('id')->all();

        for ($i = 0; $i < 20; $i++) {

            $project = new Project();
            $project->title = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $project->client = $faker->company();
            $project->description = $faker->text(500);
            $project->url = $faker->url();
            $project->slug = Str::slug($project->title, '-');
            $project->type_id = $faker->optional()->randomElement($type_ids);
            $project->save();
        }
    }
}
