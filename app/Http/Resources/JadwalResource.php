<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JadwalResource extends JsonResource
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
            'jam_mulai' => $this->jam_mulai,
            'jam_selesai' => $this->jam_selesai,
            'hari' => (int) $this->hari,
            'kelas' => new KelasResource($this->kelas),
            // 'kelas_id' => (string) $this->kelas_id,
            'guru' => [
                'id' => (string) $this->guru->id,
                'nuptk' => $this->guru->nuptk,
                'nama' => $this->guru->nama,
                'jenis_kelamin' => $this->guru->jenis_kelamin,
                'alamat' => $this->guru->alamat,
                'tanggal_lahir' => $this->guru->tanggal_lahir,
                'tempat_lahir' => $this->guru->tempat_lahir,
            ],
            'mata_pelajaran' => [
                'id' => (string) $this->mataPelajaran->id,
                'nama_mata_pelajaran' => $this->mataPelajaran->nama_mata_pelajaran,
                'kode_mata_pelajaran' => $this->mataPelajaran->kode_mata_pelajaran,
            ],
        ];
    }
}
