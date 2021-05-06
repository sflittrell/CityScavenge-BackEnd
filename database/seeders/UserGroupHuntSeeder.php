<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserGroupHuntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserGroupHunt::factory(15)->create();
    }
}
