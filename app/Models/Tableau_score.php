<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Score_riasec;
use App\Models\Participation_hi;
class Tableau_score extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function score_riasec()
    {
        return $this->belongsTo(Score_riasec::class);
    }
    public function participation_hi()
    {
        return $this->hasOne(Participation_hi::class);
    }
}
