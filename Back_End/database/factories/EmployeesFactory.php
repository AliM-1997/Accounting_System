<?php

namespace Database\Factories;

use App\Models\Branches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $branch = Branches::inRandomOrder()->first() ?? Branches::factory()->create();
        return [
            'name'      => $this->faker->name,
            'username'  => $this->faker->unique()->userName,
            'branch_id' => $branch->id,
            'role'      => $this->faker->randomElement(['manager', 'super_manager', 'employee']),
            'salary'    => $this->faker->randomFloat(2, 700, 3000),
            'phone'     => $this->faker->phoneNumber,
            'location'  => $this->faker->address,
        ];
    }
}
