<?php
use App\Model\Routine;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoutineTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        Routine::insert([
        	[
        		'day' => 'SUN',
        		'am_8' => 'CA HAC/329',
        		'am_9' => 'SE AAM/329',
        		'am_10' => 'Graphics Lab MJI/304',
        		'am_11' => 'Graphics Lab MJI/304',
        		'pm_12' => 'Graphics Lab MJI/304',
        		'pm_1' => 'বিরতি',
        		'pm_2' => 'DT MJI or SNM',
        		'pm_3' => 'DT MJI or SNM',
        		'pm_4' => '',
        		
        	],
        	// MON
        	[
        		'day' => 'MON',
        		'am_8' => 'Graphics MJI/329',
        		'am_9' => 'Graphics MJI/329',
        		'am_10' => 'Technical Writing Lab AAM/303',
        		'am_11' => 'Technical Writing Lab AAM/303',
        		'pm_12' => 'Networking SNM/329',
        		'pm_1' => 'বিরতি',
        		'pm_2' => 'CA HAC/329',
        		'pm_3' => 'DT MJI or SNM',
        		'pm_4' => '',
        		
        	],
            //TUE
        	[
        		'day' => 'TUE',
        		'am_8' => 'SE AAM/329',
        		'am_9' => 'Technical Writing Lab AAM/303',
        		'am_10' => 'Technical Writing Lab AAM/303',
        		'am_11' => 'Networking SNM/329',
        		'pm_12' => 'DT SNM',
        		'pm_1' => 'বিরতি',
        		'pm_2' => 'Project 300 MSI/MRA',
        		'pm_3' => 'Project 300 MSI/MRA',
        		'pm_4' => 'Project 300 MSI/MRA',
        		
        	],
            // WED
        	[
        		'day' => 'WED',
        		'am_8' => 'Graphics MJI/329',
        		'am_9' => 'Networking Lab SNM/304',
        		'am_10' => 'Networking Lab SNM/304',
        		'am_11' => 'Networking Lab SNM/304',
        		'pm_12' => '',
        		'pm_1' => 'বিরতি',
        		'pm_2' => 'SE AAM/329',
        		'pm_3' => 'Networking SNM/329',
        		'pm_4' => '',
        		
        	],
            // THU
        	[
        		'day' => 'THU',
        		'am_8' => 'CA HAC/329',
        		'am_9' => 'DT HAC',
        		'am_10' => 'SE LAB/303',
        		'am_11' => 'SE LAB/303',
        		'pm_12' => 'SE LAB/303',
        		'pm_1' => 'বিরতি',
        		'pm_2' => '',
        		'pm_3' => '',
        		'pm_4' => '',

        	]
        	// Dhruba Chakraborty --> dhrubamuk@gmail.com
        	]);
		// foreach($users as $user){
		//     User::create($user);
		// }
        
    }
}
