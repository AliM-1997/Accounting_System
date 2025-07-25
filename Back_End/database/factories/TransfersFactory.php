<?php

namespace Database\Factories;

use App\Models\Branches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfers>
 */
class TransfersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $branches = Branches::inRandomOrder()->take(2)->pluck('id');

         // Ensure 2 different branches
        if ($branches->count() < 2) {
            // If not enough branches, create them
            Branches::factory()->count(2)->create();
            $branches = Branches::inRandomOrder()->take(2)->pluck('id');
        }

        return [
            'from_branch_id' => $branches[0],
            'to_branch_id' => $branches[1],
            'amount' => $this->faker->randomFloat(2, 100, 5000),
            'currency' => $this->faker->randomElement(['LBP', 'USD']),
            'note' => $this->faker->sentence(),
            'invoice_image' => 'invoices/' . $this->faker->uuid . '.pdf',
            'transfer_date' => $this->faker->date(),
        ];
    }
}
