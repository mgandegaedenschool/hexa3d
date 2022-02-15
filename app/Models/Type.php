<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test_hi;
class Type extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function test_hi()
    {
        return $this->belongsTo(Test_hi::class);
    }
}

