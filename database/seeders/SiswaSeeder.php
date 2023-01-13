<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = \App\Models\User::where('role', 'siswa')->get();
        for ($i = 0; $i < $users->count(); $i++) {
            if ($i < 70) {
                \App\Models\Siswa::factory()->male()->state(fn ($attributes) => ['user_id' => $users[$i]->id])->create();
            } else {
                \App\Models\Siswa::factory()->female()->state(fn ($attributes) => ['user_id' => $users[$i]->id])->create();
            }
        }
    }
}
