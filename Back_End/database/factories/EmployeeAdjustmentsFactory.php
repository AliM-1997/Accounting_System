<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\deducations>
 */
class employee_adjustments extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id'     => Employees::inRandomOrder()->first()?->id ?? Employees::factory(),
            'type'            => $this->faker->randomElement(['deduction', 'discrepancy', 'bonus', 'correction']),
            'amount_usd'      => $this->faker->randomFloat(2, 10, 200),
            'note'            => $this->faker->sentence(),
            'adjustment_date' => $this->faker->dateTimeBetween('-2 months', 'now'),
        ];
    }
}
