<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeAdjustment>
 */
class EmployeeAdjustmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'employee_id' => Employees::inRandomOrder()->first()?->id ?? Employees::factory(),
            'type'        => $this->faker->randomElement(['bonus', 'deduction', 'discrepancy']),
            'amount_usd'  => $this->faker->randomFloat(2, 10, 1000),
            'note'        => $this->faker->optional()->sentence(),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
