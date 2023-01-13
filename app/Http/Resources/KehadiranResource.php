<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KehadiranResource extends JsonResource
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
            'kelas_id' => (string) $this->kelas_id,
            'mata_pelajaran_id' => (string) $this->mata_pelajaran_id,
            'keterangan' => $this->keterangan,
            'tanggal' => $this->tanggal,
        ];
    }
}
