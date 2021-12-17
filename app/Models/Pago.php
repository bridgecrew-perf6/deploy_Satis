<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    public $timestamps = true;

    protected $casts = [
        'costo' => 'float'
    ];

    protected $fillable = [
        'estado_del_proyecto',
        'entregable',
        'created_at',
        'fecha_de_entrega',
        'porcentaje',
        'costo'
    ];
}
