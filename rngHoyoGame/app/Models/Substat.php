<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Substat extends Model
{
    protected $table = 'relic';
    
    protected $fillable = [
        'Substat1',
        'Substat2',
        'Substat3',
        'Substat4',
        'Subsmat1',
        'Subsmat2',
        'Subsmat3',
        'Subsmat4',
        'level',
        'hasil'
    ];
    use HasFactory;

}
