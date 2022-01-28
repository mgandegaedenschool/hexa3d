<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Participation;
use App\Models\Level;
use App\Models\CalibrationGroup;

class Test extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'questions_tests')->withPivot('order');
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function levels()
    {
        return $this->hasMany(Level::class);
    }

    public function calibrationGroups()
    {
        return $this->hasMany(CalibrationGroup::class);
    }
}
