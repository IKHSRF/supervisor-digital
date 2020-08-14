<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'tanggal', 'rombel', 'id_mapel', 'id_guru',
    ];
}
