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
        //'sender_id',
        //'recipient_id',
        'created_at',
        'id_empresa'
        
    ];
}
