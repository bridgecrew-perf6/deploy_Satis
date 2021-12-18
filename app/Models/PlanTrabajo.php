<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTrabajo extends Model
{
    use HasFactory;

    protected $table = 'planTrabajos';
    public $timestamps = true;



    protected $fillable = [
        'sprint',
        'resultado',
        'duracion',
        'fecha_inicio',
        'fecha_fin',

    ];
}
