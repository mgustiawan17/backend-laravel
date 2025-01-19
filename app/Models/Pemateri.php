<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemateri extends Model
{
    use HasFactory;
    protected $table = 'db_test.pemateri';
    protected $fillable = [
        'name', 'no_hp', 'role', 'job'
    ];
}
