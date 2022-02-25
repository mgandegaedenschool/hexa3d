<?php

namespace App\Models;

use App\Models\Metier;
use App\Models\Partie;
use App\Models\Reponse;
use App\Models\Test_hi;
use App\Models\Item_serie_hexa3d_irmr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question_hi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function test_his()
    {
        return $this->hasMany(Test_hi::class);
    }
    public function parties()
    {
        return $this->hasMany(Partie::class);
    }
    public function domaines()
    {
        return $this->hasMany(Domaine::class);
    }
    public function reponse()
    {
        return $this->belongsTo(Reponse::class);
    }
    public function metiers()
    {
        return $this->hasMany(Metier::class);
    }
}
