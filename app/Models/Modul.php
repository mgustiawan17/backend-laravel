<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'db_test.modul';
    protected $fillable = [
        'name', 'jenis', 'materi', 'date', 'time', 'name_pemateri'
    ];
}
