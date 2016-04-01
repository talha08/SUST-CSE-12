<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use this user for login as admin
        User::create(['name' => 'rat','email' => 'rat@mail.com','password' => bcrypt('a')]);
        //Use this user for login as user
        User::create(['name' => 'joy','email' => 'joy@mail.com','password' => bcrypt('a')]);

        User::create(['name' => 'Talha','email' => 'talha@mail.com','password' => bcrypt('a')]);
        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
