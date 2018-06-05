<?php

use Illuminate\Database\Seeder;
use App\Posts;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 3;

        for($i = 0; $i<$limit; $i++) {
            $posts = new Posts();
            $posts->title = $faker->shuffleString(20);
            $posts->author = $faker->lastName;
            $posts->body = $faker->text(25);
            $posts->created_at = $faker->unixTime;
            $posts->save();
        }
    }
}
