<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Participation;
use App\Models\CalibrationType;
use App\Models\CalibrationGroup;
use App\Models\Level;

class ParticipationCalibrationResult extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'note_rcc',
        'note_rcc_potential',
        'note_rcc_precision',
        'note_rcc_speed',
        'retry',
    ];

    public function participation()
    {
        return $this->belongsTo(Participation::class);
    }

    public function calibrationGroup()
    {
        return $this->belongsTo(CalibrationGroup::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
