<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Question_hi;
use App\Models\TypeMetierIrmr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metier extends Model
{
    use HasFactory;
    public function type_metier_irmr()
    {
        return $this->hasMany(TypeMetierIrmr::class);
    }
    public function type()
    {
        return $this->hasMany(Type::class);
    }
    public function reponse()
    {
        return $this->belongsTo(Question_hi::class);
    }
}
