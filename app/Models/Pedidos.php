<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model{
    
    protected $table = 'fincas';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
        'email','nombres','apellido_paterno'
        ,'apellido_materno','dni','fecha_nacimiento'
        ,'fecha_inscripcion','sexo','direccion'
        ,'celular','finca_id','password'
    ];
}
