<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Participation;

class ParticipationResult extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nb_question_type_s',
        'nb_question_type_n',
        'nb_rcc',
        'nb_rcp',
        'rp',
        'nb_question_filled',
        'nb_question_unfilled',
        'potential',
        'precision',
        'speed',
        'retry',
    ];

    public function participation()
    {
        return $this->belongsTo(Participation::class);
    }
}
