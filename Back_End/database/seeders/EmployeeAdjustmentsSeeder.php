<?php

namespace Database\Seeders;

use App\Models\EmployeeAdjustment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeAdjustmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeAdjustment::factory()->count(20)->create();

    }
}
