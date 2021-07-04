<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model{
    
    protected $table = 'pedido';

    protected $primaryKey = 'id_pedido';

    public $timestamps = false;
    
    protected $fillable = [
        'nombres','apellido_paterno','apellido_materno'
        ,'dni','sexo','email','numero_celular','direccion'
        ,'necesidad','descripcion','tipo_necedidad_id'
    ];
}
