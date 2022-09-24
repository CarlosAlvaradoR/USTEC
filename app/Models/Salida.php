<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class Salida extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'incidente_id'
    ];


    public function incidente()
    {
        return $this->belongsTo(Incidente::class);
    }


    public function material()
    {
        //return $this->belongsToMany('App\Role', 'role_user', 'userId', 'roleId');
        return $this->belongsToMany(Materiales::class, 'usos', 'salida_id', 'material_id')->withPivot('cantidad');
    }
}
