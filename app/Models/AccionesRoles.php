<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccionesRoles extends Model
{
    use HasFactory;
    protected $fillable = ['rol_id', 'acciones_id'];
}
