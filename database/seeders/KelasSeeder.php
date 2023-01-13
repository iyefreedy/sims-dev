<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama' => '1',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 1,
        ]);
        Kelas::create([
            'nama' => '1',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 2,
        ]);

        Kelas::create([
            'nama' => '2',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 3,
        ]);
        Kelas::create([
            'nama' => '2',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 4,
        ]);


        Kelas::create([
            'nama' => '3',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 5,
        ]);
        Kelas::create([
            'nama' => '3',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 6,
        ]);

        Kelas::create([
            'nama' => '4',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 7,
        ]);
        Kelas::create([
            'nama' => '4',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 8,
        ]);

        Kelas::create([
            'nama' => '5',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 9,
        ]);
        Kelas::create([
            'nama' => '5',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 10,
        ]);

        Kelas::create([
            'nama' => '6',
            'kelompok' => 'A',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 11,
        ]);
        Kelas::create([
            'nama' => '6',
            'kelompok' => 'B',
            'semester' => 'gasal',
            'tahun_ajaran' => 2022,
            'guru_id' => 12,
        ]);
    }
}
