<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'poster' => $this->faker->word(),
            'twitter_link' => $this->faker->word(),
            'linkedin_link' => $this->faker->word(),
            'facebook_link' => $this->faker->word(),
            'instagram_link' => $this->faker->word(),
            'bio' => $this->faker->word(),
        ];
    }
}
