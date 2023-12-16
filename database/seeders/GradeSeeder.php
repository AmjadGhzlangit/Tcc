<?php

namespace Database\Seeders;

use App\Models\Grades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grades::factory()->count(15)->create();
    }
}
