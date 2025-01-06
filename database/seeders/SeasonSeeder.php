<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $objs = ['Winter', 'Fall', 'Summer', 'Spring'];

        foreach ($objs as $obj) {
            Season::create(['name' => $obj]);
        }
//        foreach (['Winter', 'Fall', 'Summer', 'Spring'] as $obj) {
//            Season::create(['name' => $obj]);
//        }
    }
}
