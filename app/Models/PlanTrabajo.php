<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTrabajo extends Model
{
    use HasFactory;

    protected $table = 'plantrabajos';
    public $timestamps = true;



    protected $fillable = [
        'sprint',
        'resultado',
        'duración',
        'fecha_inicio',
        'fecha_fin',
        'created_at',
        'id_empresa'

    ];
}
