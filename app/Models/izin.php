<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izin extends Model
{
    protected $table = 'izins';

    protected $fillable = ['nama', 'kelas', 'jurusan', 'kehadiran'];
}
