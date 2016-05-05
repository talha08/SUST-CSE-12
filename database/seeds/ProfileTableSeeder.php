<?php

use Illuminate\Database\Seeder;
use App\Model\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(['user_id'=> 1]);
        Profile::create(['user_id'=> 2]);
        Profile::create(['user_id'=> 3]);
    }
}
