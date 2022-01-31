<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partie;
use App\Models\Test_hi;
use App\Models\Item_serie_hexa3d_irmr;
use App\Models\Reponse;

class Question_hi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function item_serie_hexa3d_irmr()
    {
        return $this->hasMany(Item_serie_hexa3d_irmr::class);
    }
    public function test_hi()
    {
        return $this->hasOne(Test_hi::class);
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

}
