<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol_Usuario;

class MeController extends Controller{
    
    public function __construct(){
        $this->middleware('auth:api');
    }
    
    public function user(){
        $usuario = User::findOrFail(auth()->user()->id_usuario);
        return response()->json($usuario);
    }
    
    public function roles(){
        $roles_user =Rol_Usuario::where('id_usuario',auth()->user()->id_usuario)
        ->join('rol','rol.id','rol_usuario.id_rol')
        ->select('rol_usuario.id','rol.nombre_rol','rol_usuario.id_rol')->get();
        return response()->json($roles_user);
    }
}
