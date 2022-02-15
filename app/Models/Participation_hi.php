<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tableau_score;
use App\Models\Reponse;

class Participation_hi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function tableau_score()
    {
        return $this->belongsTo(Tableau_score::class);
    }
    public function reponse()
    {
        return $this->belongsTo(Reponse::class);
    }
}
