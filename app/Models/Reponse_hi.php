<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question_hi;
use App\Models\Participation_hi;

class Reponse_hi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function question_his()
    {
        return $this->hasMany(Question_hi::class);
    }
    public function participation_hi()
    {
        return $this->hasOne(Participation_hi::class);
    }
}
