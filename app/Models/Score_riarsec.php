<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tableau_score;
use App\Models\partie;
class Score_riarsec extends Model
{
    use HasFactory;
    public function Tableau_scores()
    {
        return $this->hasMany(Tableau_score::class);
    }
    public function partie()
    {
        return $this->hasOne(Partie::class);
    }
}
