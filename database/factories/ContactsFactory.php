<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts>
 */
class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'village'=> $this->faker->city,
            'district'=> $this->faker->city,
            'thana'=> $this->faker->city,
            'city'=> $this->faker->city,
            'user_id'=> '',
        ];
    }
}
