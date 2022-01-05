<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion_usuario extends Model
{
    use HasFactory;

    protected $table = 'notificaciones_de_usuarios';
    public $timestamps = false;

    

    protected $fillable = [
        'id',
        'id_notificacion',
        'id_recibido',
        'leido'
    ];
}
