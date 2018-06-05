<?php

use Illuminate\Database\Seeder;
use App\Contact;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 5;

        for($i = 0; $i<$limit; $i++) {
            $mess = new Contact();
            $mess->created_at = $faker->dateTime;
            $mess->title_contact = $faker->realText(100);
            $mess->mail_contact = $faker->email;
            $mess->body_contact = $faker->text(100);
            $mess->save();
        }
    }
}
