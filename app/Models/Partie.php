<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Domaine;
use App\Models\Question_hi;
use App\Models\Score_riarsec;
use App\Models\item_serie_hexa3d_irmr;

class Partie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function domaine()
    {
        return $this->hasOne(Domaine::class);
    }
    public function question_hi()
    {
        return $this->belongsTo(Question_hi::class);
    }
    public function score_riarsec()
    {
        return $this->belongsTo(Score_riarsec::class);
    }
    public function item_serie_hexa3d_irmr()
    {
        return $this->belongsTo(Item_serie_hexa3d_irmr::class);
    }
}
