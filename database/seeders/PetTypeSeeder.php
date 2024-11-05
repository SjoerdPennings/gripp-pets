<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PetType;

class PetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        array_map(fn ($type) => PetType::factory()->create(['name' => $type]), ['cat', 'dog', 'fish', 'rabbit']);
    }
}
