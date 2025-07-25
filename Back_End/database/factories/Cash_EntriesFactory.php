<?php

namespace Database\Factories;

use App\Models\Branches;
use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cash_EntriesFactory extends Factory
{
    public function definition(): array
    {
        $amountUsd     = $this->faker->randomFloat(2, 50, 500);
        $extraUsd      = $this->faker->randomFloat(2, 0, 50);
        $amountLbp     = $this->faker->randomFloat(2, 500_000, 1_000_000);
        $extraLbp      = $this->faker->randomFloat(2, 0, 100_000);
        $total         = $amountUsd + $extraUsd;
        $systematic    = $this->faker->randomFloat(2, 30, $total);
        $variance      = $total - $systematic;

        return [
            'branch_id'   => Branches::inRandomOrder()->first()?->id ?? Branches::factory(),
            'employee_id' => Employees::inRandomOrder()->first()?->id ?? Employees::factory(),

            'amount_lbp'  => $amountLbp,
            'amount_usd'  => $amountUsd,
            'extra_lbp'   => $extraLbp,
            'extra_usd'   => $extraUsd,

            'total'       => $total,
            'systematic'  => $systematic,
            'variance'    => $variance,
        ];
    }
}
