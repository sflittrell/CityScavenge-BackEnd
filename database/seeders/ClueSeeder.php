<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clue;

class ClueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clue::create([
            'waypoint_id' => 1,
            'label' => 'D-W1-C1',
            'clueText' => 'It\'s just a hop skip and a jump to your next destination. If mimosas are your thing this is the placee for you. Take a step outside and you\'ll see.',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 2,
            'label' => 'D-W2-C1',
            'clueText' => 'Return to where it all began. What you seek is VALUED by all.',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 3,
            'label' => 'W2-C1',
            'clueText' => 'First Clue. After years of searching I\'ve caught up to him at last! My quary is in my grasp but I need your help in catching him. First, I need you to find someplace where you can do a little research.',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 3,
            'label' => 'W2-C2',
            'clueText' => 'Second Clue. Your\'re getting close. I need a secret that can only be found in a special book.',
            'distance' => 30,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 4,
            'label' => 'W3-C1',
            'clueText' => 'This is the FIRST clue to Gratz Park Waypoint',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 4,
            'label' => 'W3-C2',
            'clueText' => 'This is the SECOND clue to Gratz Park Waypoint',
            'distance' => 30,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 5,
            'label' => 'W4-C1',
            'clueText' => 'This is the FIRST clue to Sayre Parking Lot Waypoint',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 5,
            'label' => 'W4-C2',
            'clueText' => 'This is the SECOND clue to Sayre Parking Lot Waypoint',
            'distance' => 100,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 5,
            'label' => 'W4-C3',
            'clueText' => 'This is the THIRD clue to Sayre Parking Lot Waypoint',
            'distance' => 30,
            'order' => 3,
        ]);
        Clue::create([
            'waypoint_id' => 6,
            'label' => 'W5-C1',
            'clueText' => 'This is the FIRST clue to Old Episcopal Burying Ground Waypoint',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 6,
            'label' => 'W5-C2',
            'clueText' => 'This is the SECOND clue to Old Episcopal Burying Ground Waypoint',
            'distance' => 300,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 6,
            'label' => 'W5-C3',
            'clueText' => 'This is the THIRD clue to Old Episcopal Burying Ground Waypoint',
            'distance' => 100,
            'order' => 3,
        ]);
        Clue::create([
            'waypoint_id' => 7,
            'label' => 'W6-C1',
            'clueText' => 'This is the FIRST clue to Thoroughbred Park Waypoint',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 7,
            'label' => 'W6-C2',
            'clueText' => 'This is the SECOND clue to Thoroughbred Park Waypoint',
            'distance' => 200,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 8,
            'label' => 'W7-C1',
            'clueText' => 'This is the FIRST clue to Water Street Waypoint',
            'distance' => 0,
            'order' => 1,
        ]);
        Clue::create([
            'waypoint_id' => 8,
            'label' => 'W7-C2',
            'clueText' => 'This is the SECOND clue to Water Street Waypoint',
            'distance' => 200,
            'order' => 2,
        ]);
        Clue::create([
            'waypoint_id' => 8,
            'label' => 'W7-C3',
            'clueText' => 'This is the THIRD clue to Water Street Waypoint',
            'distance' => 20,
            'order' => 3,
        ]);
    }
}
