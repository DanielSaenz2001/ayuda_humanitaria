<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;


class RolesController extends Controller{
    public function __construct() {
       //$this->middleware('auth.role:1');
    }
    public function index(){
        $resquest  = Roles::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $resquest = Roles::findOrFail($id);
        return response()->json($resquest);
    }
    public function filtro(Request $request){
        $resquest = Roles::where('nombre_rol','like',"%$request->nombre%")->paginate(20);
        return response()->json($resquest);
    }
    public function create(Request $request){
        $res = new Roles();
        $res->nombre_rol = $request->nombre_rol;
        $res->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Rol Creado."
        ), 200);
    }
    public function update($id,Request $request){
        $res = Roles::findOrFail($id);
        $res->nombre_rol = $request->nombre_rol;
        $res->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Rol Actualizado."
        ), 200);
    }
    public function destroy($id){
        Roles::findOrFail($id)->delete();
        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Rol eliminado."
        ), 200);
    }
}
