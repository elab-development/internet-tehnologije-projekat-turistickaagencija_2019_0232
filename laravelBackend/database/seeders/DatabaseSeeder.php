<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Destinacija;
use App\Models\Putnik;
use App\Models\Rezervacija;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Putnik::query()->delete();
        Destinacija::query()->delete();
        Rezervacija::query()->delete();

        Putnik::factory()
            ->count(15)
            ->create();

        Destinacija::factory()
            ->count(15)
            ->create();

        Rezervacija::factory()
            ->count(15)
            ->create();
    }
}
