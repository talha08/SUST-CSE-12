<?php

use App\Model\User;
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
        User::create(['username' => 'mas','email' => 'mrsiddiki@gmail.com','password' => bcrypt('a')]);
        User::create(['username' => 'tal','email' => 'talhaqc@gmail.com','password' => bcrypt('a')]);
        //Use this user for login as user
        User::create(['username' => 'demo','email' => 'demo@mail.com','password' => bcrypt('a')]);


        //if you add any user please update profile seed



        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
