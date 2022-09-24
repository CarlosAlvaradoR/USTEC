<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'salida_id',
        'material_id'
    ];


    public function material()
    {
        return $this->belongsTo(Materiales::class);
    }
    public function salida()
    {
        return $this->belongsTo(Salida::class);
    }
}
