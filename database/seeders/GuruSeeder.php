<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::where('role', 'guru')->get();
        for ($i = 0; $i < $users->count(); $i++) {
            if ($i < 15) {
                \App\Models\Guru::factory()->male()->state(fn ($attributes) => ['user_id' => $users[$i]->id])->create();
            } else {
                \App\Models\Guru::factory()->female()->state(fn ($attributes) => ['user_id' => $users[$i]->id])->create();
            }
        }
    }
}
