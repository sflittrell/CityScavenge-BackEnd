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
        Hunt::create(['label' => 'Monster Hunt', 'description' => 'An amazing adventure you won\'t want to miss']);
        Hunt::create(['label' => 'Treasuer Hunt', 'description' => 'An amazing adventure you won\'t want to miss']);
        Hunt::create(['label' => 'City Tour', 'description' => 'An amazing adventure you won\'t want to miss']);
        Hunt::create(['label' => 'Pub Crawl', 'description' => 'An amazing adventure you won\'t want to miss']);
        Hunt::create(['label' => 'Birthday Surprise', 'description' => 'An amazing adventure you won\'t want to miss']);
    }
}
