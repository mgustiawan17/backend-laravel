<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'db_test.peserta';
    protected $fillable = [
        'name', 'no_hp', 'alamat', 'job'
    ];
}
