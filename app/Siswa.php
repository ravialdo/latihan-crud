<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $filleble = [
        'nama', 'kelas', 'nomor_telepon', 'alamat'
    ];
}
