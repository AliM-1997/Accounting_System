<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayrollFactory extends Factory
{
    public function definition(): array
    {
        $employee = Employees::inRandomOrder()->first() ?? Employees::factory()->create();

        $workingDays = $this->faker->numberBetween(20, 30);
        $perDay = $employee->salary / 30;
        $offDays = 30 - $workingDays;

        return [
            'employees_id'           => $employee->id,
            'employee_position'     => $employee->position,
            'basic_salary'          => $employee->salary,
            'advanced_salary'       => $adv = $this->faker->randomFloat(2, 0, 500),
            'max_advanced_salary'   => round($perDay * $workingDays * 0.4, 2),
            'deductions'            => $ded = $this->faker->randomFloat(2, 0, 100),
            'discrepancy'           => $disc = $this->faker->randomFloat(2, -50, 50),
            'additions'             => $add = $this->faker->randomFloat(2, 0, 100),
            'bonus'                 => $bonus = $this->faker->randomFloat(2, 0, 200),
            'off_days'              => $offDays,
            'working_days'          => $workingDays,
            'current_expensis'      => $exp = $this->faker->randomFloat(2, 0, 300),
            'total_salary'          => round(
                $employee->salary - $ded + $disc + $add + $bonus - $adv,
                2
            ),
        ];
    }
}
