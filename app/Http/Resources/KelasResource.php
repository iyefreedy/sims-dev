<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KelasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'nama' => $this->nama,
            'kelompok' => $this->kelompok,
            'guru_id' => (string) $this->guru_id,
            'semester' => $this->semester,
            'tahun_ajaran' => $this->tahun_ajaran,
            // 'jadwal' => JadwalResource::collection($this->jadwal),
            'kehadiran' => KehadiranResource::collection($this->kehadiran),
            'siswa' => SiswaResource::collection($this->siswa),
            // 'siswa' => [
            //     'id' => (string) $this->siswa->id,
            //     'nisn' =>  $this->siswa->nisn,
            //     'nama' => $this->siswa->nama,
            //     'alamat' => $this->siswa->alamat,
            //     'jenis_kelamin' => $this->siswa->jenis_kelamin,
            //     'tempat_lahir' => $this->siswa->tempat_lahir,
            //     'tanggal_lahir' => $this->siswa->tanggal_lahir,
            // ],
        ];
    }
}
