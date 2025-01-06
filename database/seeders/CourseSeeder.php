<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['C1', 'Elementary', 'Upper Plus', 'Rus dili', 'Hytay dili'] as $obj) {
            Course::create(['name' => $obj]);
        }
    }
}
