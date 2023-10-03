<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primarykey = 'nis';

    public $timestamps = false:
}

