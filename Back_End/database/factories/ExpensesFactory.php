<?php

namespace Database\Factories;

use App\Models\Supplier;
use App\Models\Employee;
use App\Models\Employees;
use App\Models\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpensesFactory extends Factory
{
    public function definition(): array
    {
        $supplier = Suppliers::inRandomOrder()->first() ?? Suppliers::factory()->create();
        $employee = Employees::inRandomOrder()->first() ?? Employees::factory()->create();

        return [
            'supplier_id'  => $supplier->id,
            'amount_lbp'   => $this->faker->randomFloat(2, 0, 1_000_000),
            'amount_usd'   => $this->faker->randomFloat(2, 0, 1000),
            'type'         => $this->faker->randomElement(['advance', 'supplies', 'logistics', 'travel']),
            'note'         => $this->faker->sentence(),
            'employee_id'  => $employee->id,
            'created_at'   => $this->faker->dateTimeBetween('-2 months', 'now'),
            'updated_at'   => now(),
        ];
    }
}
