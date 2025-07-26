<?php

namespace Database\Seeders;

use App\Models\Transfers;
use App\Models\User;
use Database\Factories\employee_adjustments;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $this->call([
        BranchesSeeder::class,
        SuppliersSeeder::class,
        EmployeesSeeder::class,
        PayrollSeeder::class,
        ExpensesSeeder::class,
        CashEntriesSeeder::class,
        TransfersSeeder::class,
        SuppliersSeeder::class,
        EmployeeAdjustmentsSeeder::class
    ]);
    }
}
