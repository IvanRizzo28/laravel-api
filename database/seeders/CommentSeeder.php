<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            $tmp=new Comment();
            $tmp->name=$faker->name();
            $tmp->message=$faker->sentence(10);
            $project=new Project();
            $tmp->project_id=$project->inRandomOrder()->first()->id;
            $tmp->save();
        }
    }
}
