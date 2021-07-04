<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model{

    protected $table = 'rol_usuario';

    protected $primaryKey = 'id_rol_usuario';

    public $timestamps = false;

    protected $fillable = [
        'id_rol','id_usuario'
    ];
    
}
