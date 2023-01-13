<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // sesi 1
        // \App\Models\User::factory()->count(120)->siswa()->create();
        \App\Models\User::factory()->count(30)->guru()->create();

        // $this->call(\Database\Seeders\SiswaSeeder::class);
        // $this->call(\Database\Seeders\GuruSeeder::class);

        // Sesi 2
        // $this->call(KelasSeeder::class);
        // $this->call(KelasSiswaSeeder::class);

        // Sesi 3
        $this->call(MataPelajaranSeeder::class);
        $this->call(JadwalSeeder::class);
    }
}
