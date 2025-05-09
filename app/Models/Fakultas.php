<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fakultas extends Model
{
    use HasFactory;

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
