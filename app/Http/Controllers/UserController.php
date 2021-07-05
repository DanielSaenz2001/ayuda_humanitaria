<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol_Usuario;
use Carbon\Carbon;
use Response;

class UserController extends Controller{
    public function __construct() {
       //$this->middleware('auth.role:1');
    }
    public function index(){
        $resquest  = User::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = User::findOrFail($id);
        return response()->json($usuario);
    }
    public function filtro(Request $request){
        $usuario = User::where('dni','like',"%$request->dni%")
        ->where('estado','like',"%$request->estado%")->paginate(20);
        return response()->json($usuario);
    }
    public function create(Request $request){
        
        $busqueda = User::where('dni',$request->dni)->first();
        if($busqueda){
            return response()->json(array(
                'code'      =>  400,
                'error' => 'Error en Respuesta',
                'message'   =>  "Ya hay un Usuario registrado con ese DNI."
            ), 400);
        }
        $busqueda = User::where('email',$request->email)->first();
        if($busqueda){
            return response()->json(array(
                'code'      =>  400,
                'error' => 'Error en Respuesta',
                'message'   =>  "Ya hay un Usuario registrado con ese correo."
            ), 400);
        }
        $busqueda = User::where('usuario',$request->usuario)->first();
        if($busqueda){
            return response()->json(array(
                'code'      =>  400,
                'error' => 'Error en Respuesta',
                'message'   =>  "Ya hay un Usuario registrado con ese username."
            ), 400);
        }

        $data = User::latest('id_usuario')->first();
        $iduser = $data->id+1;

        $usuario = new User();
        $usuario->id_usuario =$iduser;
        $usuario->usuario =$request->usuario;
        $usuario->password =$request->password;

        $usuario->nombres = $request->nombres;
        $usuario->apellido_paterno = $request->apellido_paterno;
        $usuario->apellido_materno = $request->apellido_materno;
        $usuario->dni = $request->dni;
        
        $usuario->celular = $request->celular;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->email = $request->email;
        $usuario->estado = $request->estado;
        $usuario->save();

        
        $rolUser = new Rol_Usuario();
        $rolUser->id_usuario =$iduser;
        $rolUser->id_rol = $request->id_rol;
        $rolUser->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Usuario creado con exito."
        ), 200);

    }
    public function estado($id){
        $usuario = User::findOrFail($id);
        if($usuario->estado  == true){
            $usuario->estado = false;
        }else{
            $usuario->estado = true;
        }
        $usuario->save();
        return response()->json($usuario);
    }
    public function update($id,Request $request){
        $usuario = User::findOrFail($id);
        if($usuario->dni !== $request->dni){
            $res = User::where('dni',$request->dni)->first();
            if($res){
                return response()->json(array(
                    'code'      =>  400,
                    'error' => 'Error en Respuesta',
                    'message'   =>  "Ya hay un Usuario registrado con ese DNI."
                ), 400);
            }
        }
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

        $usuario->nombres = $request->nombres;
        $usuario->apellido_paterno = $request->apellido_paterno;
        $usuario->apellido_materno = $request->apellido_materno;
        $usuario->dni = $request->dni;
        
        $usuario->celular = $request->celular;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->email = $request->email;
        $usuario->estado = $request->estado;
        $usuario->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Usuario Actualizado."
        ), 200);
    }
    public function destroy($id){
        User::findOrFail($id)->delete();
        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Usuario eliminado."
        ), 200);
    }
    public function userRoles($id){
        $roles_user =Rol_Usuario::where('id_usuario',$id)
        ->join('rol','rol.id','rol_usuario.id_rol')
        ->select('rol_usuario.id','rol.nombre_rol','rol_usuario.id_rol')->get();
        return response()->json($roles_user);
    }
    public function createRoles(Request $request) {
        $res = Rol_Usuario::where('id_usuario',$request->id_usuario)->where('id_rol',$request->id_rol)->first();
        if($res){
            return response()->json(array(
                'code'      =>  400,
                'error' => 'Error en Respuesta',
                'message'   =>  "El usuario ya tiene el rol deseado."
            ), 400);
        }
        $rolUser = new Rol_Usuario();
        $rolUser->id_usuario =$request->id_usuario;
        $rolUser->id_rol = $request->id_rol;
        $rolUser->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Rol agregado con exito."
        ), 200);
    }
    public function destroyRoles($id){
        $rolUser = Rol_Usuario::findOrFail($id);
        $res = Rol_Usuario::user($rolUser->id_usuario)->get();
        if(count($res) < 2){
            return response()->json(array(
                'code'      =>  400,
                'error' => 'Error en Respuesta',
                'message'   =>  "No puede eliminar mas roles de este usuario."
            ), 400);
        }
        RolsUsers::findOrFail($id)->delete();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Rol de usuario eliminado."
        ), 200);
    }
}
