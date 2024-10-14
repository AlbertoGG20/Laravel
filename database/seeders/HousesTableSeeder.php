<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('houses') -> insert([
          ['address' => 'Leon y Castillo 32',
          'city' => "Las Palmas de Gran Canaria",
          'meters' => 120,
          'rooms' => 4,
          'bathrooms' => 2,],
          ['address' => 'Perez del toro',
          'city' => "Las Palmas de Gran Canaria",
          'meters' => 230,
          'rooms' => 4,
          'bathrooms' => 3,],
          ['address' => 'Tomas morales 23',
          'city' => "Las Palmas de Gran Canaria",
          'meters' => 120,
          'rooms' => 3,
          'bathrooms' => 2,],
        ]);
    }
}
