<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'nama',
        'usia',
        'alamat',
        'wali', // Added to match the migration
    ];

    public $timestamps = true;
}
