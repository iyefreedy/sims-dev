<?php

namespace Database\Factories;

use Faker\Provider\id_ID\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'tanggal_lahir' => fake('id_ID')->date(max: '2010'),
            'tempat_lahir' => fake('id_ID')->city(),
            'alamat' => fake('id_ID')->address(),
        ];
    }

    public function male()
    {
        $gender = Person::GENDER_MALE;
        return $this->state(fn (array $attributes) => [
            'nuptk' => fake('id_ID')->nik($gender),
            'nama' => fake('id_ID')->name($gender),
            'jenis_kelamin' => 'Laki-Laki',

        ]);
    }

    public function female()
    {
        $gender = Person::GENDER_FEMALE;
        return $this->state(fn (array $attributes) => [
            'nuptk' => fake('id_ID')->nik($gender),
            'nama' => fake('id_ID')->name($gender),
            'jenis_kelamin' => 'Perempuan',
        ]);
    }
}
