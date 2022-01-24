<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) { 
            # code...
            $post = new Post();
            $post->title = $faker->sentence();
            $post-> body = $faker->paragraphs(10, true);
            $post->save();
        }
    }
}