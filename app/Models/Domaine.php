<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question_hi;
use App\Models\Table_etalonnage_d;

class Domaine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function partie()
    {
        return $this->belongsTo(Partie::class);
    }
    public function question_hi()
    {
        return $this->belongsTo(Question_hi::class);
    }
    public function table_etalonnage_d()
    {
        return $this->belongsTo(Table_etalonnage_d::class);
    }
}
