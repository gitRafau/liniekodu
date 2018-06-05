<?php

use Illuminate\Database\Seeder;
use App\Comments;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 20;

        for($i = 0; $i<$limit; $i++) {
            $comment = new Comments();
            $comment->body = $faker->text(85);
            $comment->posts_id = $faker->numberBetween(1,5);
            $comment->created_at = $faker->unixTime;
            $comment->save();
        }
    }
}
