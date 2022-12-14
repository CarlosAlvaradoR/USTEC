<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incidente extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'area_id',
        'importancia_id',
        'tipo_id',
        'equipo_id',
        'user_id',
        'titulo',
        'estado'
    ];

    // ** importancia o gravedad del incidente
    public function importancia()
    {
        return $this->belongsTo(Importancia::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function estado()
    {
        if ($this->estado == 2) {
            return 'No solucionado';
        } else {
            return 'Solucionado';
        }
    }

    public function solucion()
    {
        // $solucion = Salida::where('incidente_id', $this->id)->get();
        // return $solucion;

        return $this->hasMany(Salida::class);
    }
}
