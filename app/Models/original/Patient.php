<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'age',
        'formation',
        'job',
        'context',
    ];

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
