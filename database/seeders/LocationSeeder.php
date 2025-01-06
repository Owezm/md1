<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location_parent_id1 = Location::create([
            'name' => 'UNW',
            'parent_id' => null,
        ]);

        $location_parent_id2 = Location::create([
            'name' => 'PRH',
            'parent_id' => null,
        ]);

        $location_parent_id3 = Location::create([
            'name' => 'ANW',
            'parent_id' => null,
        ]);

        foreach (['A1', 'A2', 'A3', 'A4', 'B1', 'B2', 'B3'] as $obj) {
            Location::create(['name' => $obj]);
        }
    }
}
