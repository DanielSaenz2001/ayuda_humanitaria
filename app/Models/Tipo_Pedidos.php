<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Pedidos extends Model{
    protected $table = 'tipo_de_necesidad';

    protected $primaryKey = 'id_tipo_necesidad';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre_necesidad','imagen'
    ];
}
