<?php

namespace App\Models;

use App\Models\Metier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeMetierIrmr extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function metier()
    {
        return $this->belongsTo(Metier::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
