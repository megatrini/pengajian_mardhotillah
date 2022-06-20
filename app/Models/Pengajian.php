<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajian extends Model
{  
    protected $table = 'pengajian';
    protected $fillable = [
        'tanggal',
        'materi',
        'penceramah'
    ];

    use HasFactory;

    protected $hidden = [];
}
