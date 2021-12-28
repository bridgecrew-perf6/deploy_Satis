<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_empresa extends Model
{
    protected $table = 'usuario_empresa';
    use HasFactory;
    protected $fillable = [
        'usr',
        'emp'
    ];


}
