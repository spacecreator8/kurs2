<?php

namespace Database\Factories;

use App\Models\Avatar;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'activity' => fake()->word(),
            'login' => fake()->unique()->userName(),
            'password' => fake()->password(),
            'email' => fake()->unique()->safeEmail(),
            'name' => fake()->word(),
            'surname' => fake()->word(),
            'rate_honesty' => fake()->numberBetween(0, 100),
            'rate_decency' => fake()->numberBetween(0, 100),
            'role_id' => Role::get()->random()->id,
            'visited_at' => fake()->dateTime(),
            'buying_count' => random_int(0,20),
            'sales_count' => random_int(0,20),
            'ava_id' => Avatar::get()->random()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
