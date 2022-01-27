<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionType;
use App\Models\Test;
use App\Models\Color;
use App\Models\Number;
use App\Models\Clue;

class Question extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'training',
        'example',
        'text',
        'name'
    ];

    public function clues()
    {
        return $this->hasMany(Clue::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'questions_tests')->withPivot('order');
    }

    public function numberColors()
    {
        return $this->belongsToMany(Number::class, 'question_numbers_colors')->withPivot('color_id')->join('colors', 'colors.id', '=', 'question_numbers_colors.color_id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function getImage(){

        return hash('SHA512',$this->name).'.png';
    }
}
