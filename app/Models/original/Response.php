<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
use App\Models\Number;
use App\Models\Participation;
use App\Models\Question;

class Response extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    const UPDATED_AT = null;

    protected $fillable = [
        'nb_clue',
        'time_start_at',
        'time',
        'retry_time',
        'rcc',
        'rcp',
        'retry'
    ];

    public function participation()
    {
        return $this->belongsTo(Participation::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function numberColors()
    {
        return $this->belongsToMany(Number::class, 'response_numbers_colors')->withPivot('color_id')->join('colors', 'colors.id', '=', 'response_numbers_colors.color_id');
    }
}
