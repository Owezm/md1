<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Location;
use App\Models\Product;
use App\Models\Registration;
use App\Models\Season;
use App\Models\student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\StudentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call([
            CourseSeeder::class,
            LocationSeeder::class,
            SeasonSeeder::class,
        ]);

        Student::factory(100)->create();
        Teacher::factory(10)->create();
        Lesson::factory(30)->create();
        Registration::factory(200)->create();
        Season::seeder(4)->create();
        Location::seeder(15)->create();
        Course::seeder(5)->create();

    }
}
