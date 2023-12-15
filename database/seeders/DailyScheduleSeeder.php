<?php

namespace Database\Seeders;

use App\Models\DailySchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailyScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DailySchedule::factory()->count(10)->create();

    }
}
