<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question_hi;
use App\Models\Partie;

class Item_serie_hexa3d_irmr extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function question_hi()
    {
        return $this->belongsTo(Question_hi::class);
    }
    public function parties()
    {
        return $this->hasMany(Partie::class);
    }
}
