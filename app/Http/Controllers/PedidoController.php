<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Pedidos;
use App\Models\Pedidos;

class PedidoController extends Controller{
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['create','tipos']]);
    }
    public function index(){
        $resquest  = Pedidos::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $resquest = Pedidos::findOrFail($id);
        return response()->json($resquest);
    }
    public function create(Request $request){

        $pedido = new Pedidos();
        $pedido->nombres =$request->nombres;
        $pedido->apellido_paterno = $request->apellido_paterno;
        $pedido->apellido_materno = $request->apellido_materno;
        $pedido->dni = $request->dni;
        $pedido->sexo = $request->sexo;
        
        $pedido->email = $request->email;
        $pedido->numero_celular = $request->numero_celular;
        $pedido->referencia = $request->referencia;
        $pedido->descripcion = $request->descripcion;
        $pedido->tipo_necedidad_id = $request->tipo_necedidad_id;
        $pedido->latitud = $request->latitud;
        $pedido->longitud = $request->longitud;
        $pedido->estado = false;
        $pedido->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Pedido creado con exito."
        ), 200);

    }
    public function update($id,Request $request){
        $usuario = Pedidos::findOrFail($id);
        $pedido->nombres =$request->nombres;
        $pedido->apellido_paterno = $request->apellido_paterno;
        $pedido->apellido_materno = $request->apellido_materno;
        $pedido->dni = $request->dni;
        $pedido->sexo = $request->sexo;
        
        $pedido->email = $request->email;
        $pedido->numero_celular = $request->numero_celular;
        $pedido->referencia = $request->referencia;
        $pedido->descripcion = $request->descripcion;
        $pedido->tipo_necedidad_id = $request->tipo_necedidad_id;
        $pedido->latitud = $request->latitud;
        $pedido->longitud = $request->longitud;
        $pedido->estado = $request->estado;
        $pedido->save();

        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Pedido Actualizado."
        ), 200);
    }
    public function destroy($id){
        Pedidos::findOrFail($id)->delete();
        return response()->json(array(
            'code'      =>  200,
            'data' => 'Ok',
            'message'   =>  "Pedido Eliminado."
        ), 200);
    }
    public function tipos(){
        $resquest  = Tipo_Pedidos::all();
        return response()->json($resquest); 
    }
}
