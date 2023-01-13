<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kelas ID = 1
        // Senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '09:30',
                'guru_id' => 1,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 1,
            ]
        );
        // Selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 1,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 1,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:30',
                'guru_id' => 2,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 1,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 3,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 1,
            ]
        );
        // Rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'guru_id' => 1,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 1,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 4,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 1,
            ]
        );
        // Kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 1,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 1,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 5,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 1,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 6,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 1,
            ]
        );

        // Kelas ID 2
        // Senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 2,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:30',
                'guru_id' => 8,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 9,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 2,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 10,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 2,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 10,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 11,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 2,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 12,
                'mata_pelajaran_id' => 8,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '09:0',
                'guru_id' => 13,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 2,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 14,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 2,
            ]
        );

        // Kelas 2 A
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 15,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '13:15',
                'guru_id' => 16,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '13:15',
                'jam_selesai' => '14:15',
                'guru_id' => 17,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 3,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 18,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 15,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 17,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '13:15',
                'jam_selesai' => '14:15',
                'guru_id' => 18,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 3,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 10,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 15,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 18,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '13:15',
                'jam_selesai' => '14:15',
                'guru_id' => 19,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 3,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 20,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 18,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:45',
                'guru_id' => 15,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 3,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '13:45',
                'jam_selesai' => '14:15',
                'guru_id' => 17,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 3,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 21,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 3,
            ]
        );

        // Kelas 2 B
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 22,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 23,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 22,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '13:15',
                'jam_selesai' => '14:15',
                'guru_id' => 24,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 4,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 25,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 26,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 4,
            ]
        );

        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '14:15',
                'guru_id' => 27,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 4,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 25,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 26,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '14:15',
                'guru_id' => 27,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 4,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 28,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 23,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:45',
                'guru_id' => 25,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 4,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '13:45',
                'jam_selesai' => '14:15',
                'guru_id' => 24,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 4,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 29,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 4,
            ]
        );

        // Kelas 3 A
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 1,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 2,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:30',
                'guru_id' => 3,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '11:00',
                'guru_id' => 4,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 5,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 5,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 6,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:30',
                'jam_selesai' => '11:00',
                'guru_id' => 8,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 5,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 5,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 5,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 5,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 5,
            ]
        );
        // Kelas 3 B
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 6,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 6,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 6,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 6,
            ]
        );
        // Kelas 4 A
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 7,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 7,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 7,
            ]
        );
        //kelas 4 B
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 8,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 8,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 8,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 8,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 8,
            ]
        );
        //kelas 5 A
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 7,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 9,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 9,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 9,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 9,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 9,
            ]
        );
        //kelas 5 B
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 10,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 10,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 10,
            ]
        );
        //kelas 6 A
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 11,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 11,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 11,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 11,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 11,
            ]
        );
        //kelas 6 B
        //senin
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 11,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 14,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 4,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 1,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 12,
            ]
        );
        //selasa
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 10,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 2,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 6,
                'kelas_id' => 12,
            ]
        );
        //rabu
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 3,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 3,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 12,
            ]
        );
        //kamis
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 2,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 16,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 17,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '10:30',
                'jam_selesai' => '11:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 7,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:00',
                'jam_selesai' => '11:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '11:30',
                'jam_selesai' => '12:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 5,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 4,
                'jam_mulai' => '12:45',
                'jam_selesai' => '13:15',
                'guru_id' => 7,
                'mata_pelajaran_id' => 15,
                'kelas_id' => 12,
            ]
        );
        //jumat
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:00',
                'jam_selesai' => '07:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '07:30',
                'jam_selesai' => '08:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 12,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:00',
                'jam_selesai' => '08:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '08:30',
                'jam_selesai' => '09:00',
                'guru_id' => 7,
                'mata_pelajaran_id' => 9,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '09:00',
                'jam_selesai' => '09:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
        Jadwal::create(
            [
                'hari' => 5,
                'jam_mulai' => '10:00',
                'jam_selesai' => '10:30',
                'guru_id' => 7,
                'mata_pelajaran_id' => 1,
                'kelas_id' => 12,
            ]
        );
    }
}
