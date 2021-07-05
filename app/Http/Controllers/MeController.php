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
    public function update($id,Request $request){
        $usuario = User::findOrFail(auth()->user()->id_usuario);
        if($usuario->usuario !== $request->usuario){
            $res = User::where('usuario',$request->usuario)->first();
            if($res){
                return response()->json(array(
                    'code'      =>  400,
                    'error' => 'Error en Respuesta',
                    'message'   =>  "Ya hay un Usuario registrado con ese Username."
                ), 400);
            }
        }
        $usuario = User::findOrFail($id);
        $usuario->usuario =$request->usuario;
        
        $usuario->celular = $request->celular;
        $usuario->email = $request->email;
        $usuario->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Usuario Actualizado."
        ), 200);
    }
    public function roles(){
        $roles_user =Rol_Usuario::where('id_usuario',auth()->user()->id_usuario)
        ->join('rol','rol.id','rol_usuario.id_rol')
        ->select('rol_usuario.id','rol.nombre_rol','rol_usuario.id_rol')->get();
        return response()->json($roles_user);
    }
}
