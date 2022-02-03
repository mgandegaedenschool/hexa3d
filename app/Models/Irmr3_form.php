<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irmr3_form extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded  =[];
    protected $casts = [
        'value' => 'array'
    ];
}
