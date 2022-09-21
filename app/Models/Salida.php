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
}
