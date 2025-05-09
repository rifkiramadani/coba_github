<?php

namespace App\Models;

use App\Models\Fakultas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    protected $fillable = ['name', 'npm', 'alamat', 'fakultas_id'];
}
