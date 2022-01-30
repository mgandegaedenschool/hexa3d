<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function partie()
    {
        return $this->belongsTo(Domaine::class);
    }
}
