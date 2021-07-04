<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model{

    protected $table = 'rol';

    protected $primaryKey = 'id_rol';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre_rol'
    ];
}
