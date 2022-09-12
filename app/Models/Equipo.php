<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre_equipo',
        'marca',
        'descripcion',
        'area_id'
    ];

    public function __construct()
    {
    }

    public function incidentes()
    {
        return $this->hasMany(Incidente::class)->orderBy('created_at', 'DESC');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
