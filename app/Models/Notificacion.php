<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $table = 'notificaciones';
    public $timestamps = true;

    

    protected $fillable = [
        'mensaje_notificacion',
        'envia_id',
        'created_at',
        'recibe_id'
        
    ];
}
