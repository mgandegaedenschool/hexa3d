<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Level;
use App\Models\CalibrationGroup;
use App\Models\CalibrationType;

class Calibration extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'value',
        'point'
    ];

    public function calibrationGroup()
    {
        return $this->belongsTo(CalibrationGroup::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function calibrationType()
    {
        return $this->belongsTo(CalibrationType::class);
    }
}
