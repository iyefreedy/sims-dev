<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NilaiResource extends JsonResource
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
            'siswa' => new SiswaResource($this->siswa),
            'mata_pelajaran' => [
                'id' => (string) $this->mataPelajaran->id,
                'nama_mata_pelajaran' => $this->mataPelajaran->nama_mata_pelajaran,
                'kode_mata_pelajaran' => $this->mataPelajaran->kode_mata_pelajaran,
            ],
            'uts' => $this->uts,
            'uas' => $this->uas,
            'tugas' => $this->tugas,
            'is_published' => (bool) $this->is_published,
        ];
    }
}
