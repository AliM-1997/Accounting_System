<?php

namespace Database\Seeders;

use App\Models\CashEntries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CashEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CashEntries::factory()->count(20)->create();

    }
}
