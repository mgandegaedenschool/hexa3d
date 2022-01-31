<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table_etalonnage_d;

class Etalonnage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function table_etalonnage_d()
    {
        return $this->belongsTo(Table_etalonnage_d::class);
    }
}
