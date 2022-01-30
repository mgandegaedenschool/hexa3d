<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Domaine;

class Partie extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function domaines()
    {
        return $this->hasMany(Domaine::class);
    }
}
