<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027001',
                'nama_mata_pelajaran' => 'Matematika',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027002',
                'nama_mata_pelajaran' => 'Bahasa Indonesia',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027003',
                'nama_mata_pelajaran' => 'IPA',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027004',
                'nama_mata_pelajaran' => 'Fiqih',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027005',
                'nama_mata_pelajaran' => 'Aqidah Akhlak',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027006',
                'nama_mata_pelajaran' => 'Al-Qur\'an Hadits',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027007',
                'nama_mata_pelajaran' => 'Sejarah Kebudayaan Islam',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027008',
                'nama_mata_pelajaran' => 'PJOK',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027009',
                'nama_mata_pelajaran' => 'Bahasa Inggris',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027010',
                'nama_mata_pelajaran' => 'Bahasa Arab',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027011',
                'nama_mata_pelajaran' => 'Tahfidz',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027012',
                'nama_mata_pelajaran' => 'Pendidikan Kewarganegaraan',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027013',
                'nama_mata_pelajaran' => 'Pendidikan Kewarganegaraan',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027014',
                'nama_mata_pelajaran' => 'IPS',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027015',
                'nama_mata_pelajaran' => 'SBK',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027016',
                'nama_mata_pelajaran' => 'SKI',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027017',
                'nama_mata_pelajaran' => 'PLBJ',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
        MataPelajaran::create(
            [
                'kode_mata_pelajaran' => '027018',
                'nama_mata_pelajaran' => 'Olahraga',
                'kkm' => fake()->numberBetween(60, 75),
            ]
        );
    }
}
