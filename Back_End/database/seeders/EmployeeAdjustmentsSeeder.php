<?php

namespace Database\Seeders;

use App\Models\Employee_Adjustments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee_Adjustments::factory()->count(20)->create();

    }
}
