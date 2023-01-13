<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class KelasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = Siswa::all();

        foreach ($students as $s) {
            KelasSiswa::factory()->state(new Sequence(
                fn ($sequence) => ['kelas_id' => Kelas::all()->random()]
            ))->create(['siswa_id' => $s->id]);
        }
    }
}
