<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question_hi;
use App\Models\Type;

class Test_hi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function question_hi()
    {
        return $this->belongsTo(Question_hi::class);
    }
    public function type()
    {
        return $this->hasMany(Type::class);
    }
}
