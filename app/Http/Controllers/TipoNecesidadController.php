<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Pedidos;

class TipoNecesidadController extends Controller{
    public function __construct() {
        $this->middleware('auth.role:1');
     }
     public function index(){
         $resquest  = Tipo_Pedidos::paginate(20);
         return response()->json($resquest); 
     }
     public function show($id){
         $resquest = Tipo_Pedidos::findOrFail($id);
         return response()->json($resquest);
     }
     public function filtro(Request $request){
         $resquest = Tipo_Pedidos::where('nombre_necesidad','like',"%$request->nombre%")->paginate(20);
         return response()->json($resquest);
     }
     public function create(Request $request){
         $res = new Tipo_Pedidos();
         $res->nombre_necesidad = $request->nombre_necesidad;
         $res->imagen = $request->imagen;
         $res->save();
 
         return response()->json(array(
             'code'      =>  200,
             'data' => 'Ok',
             'message'   =>  "Tipo de pedido Creado."
         ), 200);
     }
     public function update($id,Request $request){
         $res = Tipo_Pedidos::findOrFail($id);
         $res->nombre_necesidad = $request->nombre_necesidad;
         $res->imagen = $request->imagen;
         $res->save();
 
         return response()->json(array(
             'code'      =>  200,
             'data' => 'Ok',
             'message'   =>  "Tipo de pedido Actualizado."
         ), 200);
     }
     public function destroy($id){
        Tipo_Pedidos::findOrFail($id)->delete();
         return response()->json(array(
             'code'      =>  200,
             'data' => 'Ok',
             'message'   =>  "Tipo de pedido Eliminado."
         ), 200);
     }
}
