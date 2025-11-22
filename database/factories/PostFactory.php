<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake('ru_RU')->realTextBetween(10, 30),
            'descriptions' => fake('ru_RU')->realTextBetween(30, 100),
            'text' => fake('ru_RU')->realTextBetween(200, 1000),
        ];
    }
}
