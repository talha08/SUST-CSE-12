<?php
use App\Routine;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoutineTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Routine::create(
        	[
        		'day' => 'SUN',
        		'8_am' => 'CA HAC/329',
        		'9_am' => 'SE AAM/329',
        		'10_am' => 'Graphics Lab MJI/304',
        		'11_am' => 'Graphics Lab MJI/304',
        		'12_pm' => 'Graphics Lab MJI/304',
        		'1_pm' => '',
        		'2_pm' => 'DT MJI or SNM',
        		'3_pm' => 'DT MJI or SNM',
        		'4_pm' => '',
        		
        	],
        	// MON
        	[
        		'day' => 'MON',
        		'8_am' => 'Graphics MJI/329',
        		'9_am' => 'Graphics MJI/329',
        		'10_am' => 'Technical Writing Lab AAm/303',
        		'11_am' => 'Technical Writing Lab AAm/303',
        		'12_pm' => 'Networking SNM/329',
        		'1_pm' => '',
        		'2_pm' => 'CA HAC/329',
        		'3_pm' => 'DT MJI or SNM',
        		'4_pm' => '',

        	],
        	[
        		'day' => 'TUE',
        		'8_am' => 'SE AAM/329',
        		'9_am' => 'Technical Writing Lab AAm/303',
        		'10_am' => 'Technical Writing Lab AAm/303',
        		'11_am' => 'Networking SNM/329',
        		'12_pm' => 'DT SNM',
        		'1_pm' => '',
        		'2_pm' => 'Project 300 MSI/MRA',
        		'3_pm' => 'Project 300 MSI/MRA',
        		'4_pm' => 'Project 300 MSI/MRA',

        	],
        	[
        		'day' => 'WED',
        		'8_am' => 'Graphics MJI/329',
        		'9_am' => 'Networking Lab SNM/304',
        		'10_am' => 'Networking Lab SNM/304',
        		'11_am' => 'Networking Lab SNM/304',
        		'12_pm' => '',
        		'1_pm' => '',
        		'2_pm' => 'SE AAM/329',
        		'3_pm' => 'Networking SNM/329',
        		'4_pm' => '',

        	],
        	[
        		'day' => 'THU',
        		'8_am' => 'CA HAC/329',
        		'9_am' => 'DT HAC',
        		'10_am' => 'SE LAB/303',
        		'11_am' => 'SE LAB/303',
        		'12_pm' => 'SE LAB/303',
        		'1_pm' => '',
        		'2_pm' => '',
        		'3_pm' => '',
        		'4_pm' => '',

        	]
        	// Dhruba Chakraborty --> dhrubamuk@gmail.com
        	);
        
    }
}
