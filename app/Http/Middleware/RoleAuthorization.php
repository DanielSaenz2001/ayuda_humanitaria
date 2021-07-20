<?php
namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Http\Request;
use App\Models\Rol_Usuario;

class RoleAuthorization
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        try {  
            $token = JWTAuth::parseToken();
            $user = $token->authenticate();
        } catch (TokenExpiredException $e) {   
            return $this->unauthorized('Tu token ha caducado. Por favor, inicie sesión nuevamente.');
        } catch (TokenInvalidException $e) {
            return $this->unauthorized('Tu token no es válido. Por favor, inicie sesión nuevamente.');
        }catch (JWTException $e) {
            return $this->unauthorized('Por favor, adjunte un token de portador a su solicitud.');
        }
        $roles_user =Rol_Usuario::where('id_usuario',$user->id_usuario)->select('id_rol')->get();

        $estado=false;
        foreach ($roles_user as $r) {
            
            if(in_array($r->rol_id, $roles)){
                $estado = $estado || true;
            }
            $estado = $estado || false;
        }


        if ($user && $estado) {
            return $next($request);
        }
    
        return $this->unauthorized();
    }
    
    private function unauthorized($message = null){
        return response()->json([
            'error' => 'Autorización',
            'message' => $message ? $message : 'No está autorizado para acceder a este recurso.'.$user,
            'message' => $message ? $message : 'No está autorizado para acceder a este recurso.'.$roles_user,
            'success' => false
        ], 401);
    }
}