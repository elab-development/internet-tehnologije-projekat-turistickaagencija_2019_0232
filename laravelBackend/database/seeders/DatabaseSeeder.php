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
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Destinacija::truncate();
        Putnik::truncate();
        Rezervacija::truncate();

        Destinacija::factory()
            ->count(20)
            ->create();

        Putnik::factory()
            ->count(20)
            ->create();

        Rezervacija::factory()
            ->count(20)
            ->create();
    }
}
