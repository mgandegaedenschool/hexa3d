<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReponseHexa3d extends Model
{
    use HasFactory;
    use HasFactory;
    protected $casts = [
        'datas' => 'array'
    ];
}
