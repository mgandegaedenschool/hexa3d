<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test;
use App\Models\Calibration;

class CalibrationGroup extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function calibrations()
    {
        return $this->hasMany(Calibration::class);
    }
}
