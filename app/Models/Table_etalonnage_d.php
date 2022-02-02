<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etalonnage;
use App\Models\Domaine;
use App\Models\Table_etalonnage_d_riarsec;

class Table_etalonnage_d extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function etalonnage()
    {
        return $this->hasOne(Etalonnage::class);
    }
    public function domaine()
    {
        return $this->hasOne(Domaine::class);
    }
    public function table_etalonnage_d_riarsec()
    {
        return $this->belongsTo(Table_etalonnage_d_riarsec::class);
    }
}
