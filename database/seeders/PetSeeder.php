<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        foreach (range(1, 4) as $type) {
            Pet::factory(3)->for(PetType::find($type))->create();
        }
    }
}
