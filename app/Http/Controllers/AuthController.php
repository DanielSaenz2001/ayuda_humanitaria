<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol_Usuario;

class AuthController extends Controller{
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    public function login(Request $request){   
        $credentials = request(['usuario', 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Autorización',
                'message' => 'El Usuario o la contraseña estan erroneos.'], 401);
        }
        
        if(auth()->user()->estado == 0 || auth()->user()->estado == false){
            return response()->json(['error' => 'Autorización',
            'message' => 'El Usuario no esta autorizado en usar este sistema.'], 401);
        }
        return $this->respondWithToken($token);
    }
    public function cambiarContra(Request $request){
        if(auth()->user()->usuario !== request('usuario')){
            return response()->json(['error' => 'Autorización',
            'message' => 'Usted no es propietario de esta cuenta.'], 401);
        }
        $credentials = request(['usuario','password']);
        if(auth()->user()->estado == 0 || auth()->user()->estado == false){
            return response()->json([
                'error' => 'Autorización',
                'message' => 'El Correo no esta autorizado para usar este sistema.'], 401);
        }
        if($token = auth()->attempt($credentials)){
            if($request->password_new == $request->password_confirmation){
                $user = User::where('dni',auth()->user()->dni)->first();
                $user->update(['password'=>$request->password_new]);
                return response()->json([
                    'data'=>'Ok',
                    'message' => 'La contraseña fue cambiada exitosamente.'],200);
            }
            return response()->json([
                'error' => 'Autorización',
                'message'=>'La contraseñas no coinciden.'],401);
        }
        return response()->json([
            'error' => 'Autorización',
            'message'=>'El Correo o la contraseña estan erroneos.'],401);
    }
    public function me(){
        return response()->json(auth()->user());
    }
    public function roles(){
        $roles_user =Rol_Usuario::where('id_usuario',auth()->user()->id_usuario)
        ->join('rol','rol.id','rol_usuario.id_rol')
        ->select('rol_usuario.id','rol.nombre_rol','rol_usuario.id_rol')->get();
        return response()->json($roles_user);
    }
    public function logout(){
        auth()->logout();
        return response()->json([ 'data'=>'Ok', 'message' => 'Se cerro sesión correctamente.'],200);
    }
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ],200);
    }
    protected function jsonResponse($data, $code = 200){
     return response()->json($data, $code, 
     ['Content-Type' => 'application/json;charset=UTF8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
