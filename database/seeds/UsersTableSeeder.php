<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = new User();
            $user->name = 'czipsik';
            $user->email = 'rafal.fidurski@gmail.com';
            $user->password = bcrypt('rafal&czipsik');
            $user->save();
    }
}
