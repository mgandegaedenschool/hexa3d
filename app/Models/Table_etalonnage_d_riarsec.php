<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table_etalonnage_d;
class Table_etalonnage_d_riarsec extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function table_etalonnage_d()
    {
        return $this->hasOne(Table_etalonnage_d::class);
    }
}
