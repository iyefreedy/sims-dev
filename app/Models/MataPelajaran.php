<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function pertemuan()
    {
        return $this->hasManyThrough(Pertemuan::class, Jadwal::class);
    }
}
