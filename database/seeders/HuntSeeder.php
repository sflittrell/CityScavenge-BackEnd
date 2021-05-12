<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hunt;

class HuntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hunt::create([
            'label' => 'Demo Hunt',
            'photoNumber' => '1',
            'description' => 'An amazing adventure you won\'t want to miss',

        ]);
        Hunt::create([
            'label' => 'Monster Hunt',
            'photoNumber' => '2',
            'description' => 'An amazing adventure you won\'t want to miss',
            'status' => 'Coming Soon'
        ]);
        Hunt::create([
            'label' => 'Treasuer Hunt',
            'photoNumber' => '3',
            'description' => 'An amazing adventure you won\'t want to miss',
            'status' => 'Coming Soon'
        ]);
        Hunt::create([
            'label' => 'City Tour',
            'photoNumber' => '4',
            'description' => 'An amazing adventure you won\'t want to miss',
            'status' => 'Coming Soon'
        ]);
        Hunt::create([
            'label' => 'Pub Crawl',
            'photoNumber' => '5',
            'description' => 'An amazing adventure you won\'t want to miss',
            'status' => 'Coming Soon'
        ]);
        Hunt::create([
            'label' => 'Birthdays',
            'photoNumber' => '6',
            'description' => 'An amazing adventure you won\'t want to miss',
            'status' => 'Coming Soon'
        ]);
    }
}
