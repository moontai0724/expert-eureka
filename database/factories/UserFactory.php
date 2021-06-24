<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => password_hash('password', PASSWORD_BCRYPT),
            'remember_token' => Str::random(10),
            'status' => $this->faker->text,
            'birthday' => $this->faker->date(),
            'interest' => $this->faker->text,
            'job' => $this->faker->jobTitle,
            'constellation' => $this->faker->text,
        ];
    }
}
