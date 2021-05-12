<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Waypoint;

class WaypointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Waypoint::create([
        'hunt_id' => 1,
        'label' => 'Demo Waypoint, Annex',
        'lat' => 38.0419307,
        'lng' => -84.4921300,
        'distance' => 40,
        'question' => 'First Question: How many pages in the library logo',
        'answer' => '6',
        'order' => 1]);
        Waypoint::create([
        'hunt_id' => 1,
        'label' => 'Demo Waypoint, Awesome Inc',
        'lat' => 38.0422029,
        'lng' => -84.4923681,
        'distance' => 40,
        'question' => 'Second Question: How many pages in the library logo',
        'answer' => '6',
        'order' => 1]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Main Branch Library',
        'lat' => 38.045655,
        'lng' => -84.496297,
        'distance' => 20,
        'question' => 'How many pages in the library logo',
        'answer' => '6',
        'order' => 1]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Gratz Park, Carnegie Center',
        'lat' => 38.049886,
        'lng' => -84.495890,
        'distance' => 20,
        'question' => 'How manu columns are on the front of the building',
        'answer' => '4',
        'order' => 2]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Sayre Parking Lot',
        'lat' => 38.047627,
        'lng' => -84.493122,
        'distance' => 20,
        'question' => 'What parking spot is covered in blood',
        'answer' => '35',
        'order' => 3]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Old Episcopal Burying Ground',
        'lat' => 38.047566,
        'lng' => -84.488631,
        'distance' => 20,
        'question' => 'What color is the marker',
        'answer' => 'blue',
        'order' => 4]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Thoroughbred Park Horses',
        'lat' => 38.041413,
        'lng' => -84.490971,
        'distance' => 20,
        'question' => 'How many horses are their in the park',
        'answer' => '8',
        'order' => 5]);
        Waypoint::create([
        'hunt_id' => 2,
        'label' => 'Water Street, behind Awesome Inc',
        'lat' => 38.041891,
        'lng' => -84.492933,
        'distance' => 20,
        'question' => 'What color is the blood on the ground',
        'answer' => 'green',
        'order' => 6]);

    }
}
