<?php

namespace Database\Seeders;

use App\Models\Cash_Entries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CashEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cash_Entries::factory()->count(20)->create();

    }
}
