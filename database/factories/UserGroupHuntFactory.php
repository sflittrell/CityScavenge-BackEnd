<?php

namespace Database\Factories;

use App\Models\UserGroupHunt;
use App\Models\User;
use App\Models\Hunt;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserGroupHuntFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserGroupHunt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'hunt_id' => Hunt::all()->random()->id,
            'completed' => $this->faker->dateTime,
        ];
    }
}
