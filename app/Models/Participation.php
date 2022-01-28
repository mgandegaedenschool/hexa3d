<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Status;
use App\Models\Patient;
use App\Models\Response;
use App\Models\ParticipationResult;
use App\Models\ParticipationTestType;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParticipationCalibrationResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participation extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'token',
        'theme',
        'understand',
        'voluntary'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function participationTestType()
    {
        return $this->belongsTo(ParticipationTestType::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function participationResults()
    {
        return $this->hasMany(ParticipationResult::class);
    }

    public function participationCalibrationResults()
    {
        return $this->hasMany(ParticipationCalibrationResult::class);
    }
}
