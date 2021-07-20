<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::group([
    'middleware' => 'api',
    'namespace'  => 'App\Http\Controllers',
], function () {
    /*   AuthController   */

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('changePassword', 'AuthController@cambiarContra');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::get('roles', 'AuthController@roles');
    Route::get('me', 'AuthController@me');

    /*   UserController   */
    Route::get('Usuario', 'UserController@index');
    Route::get('Usuario/{id}', 'UserController@show');
    Route::post('UsuarioFiltro', 'UserController@filtro');
    Route::post('Usuario', 'UserController@create');
    Route::put('UsuarioEstado/{id}', 'UserController@estado');
    Route::put('Usuario/{id}', 'UserController@update');
    Route::delete('Usuario/{id}', 'UserController@destroy');
    Route::get('UsuarioRoles', 'UserController@userRoles');
    Route::post('UsuarioRoles', 'UserController@createRoles');
    Route::delete('UsuarioRoles/{id}', 'UserController@destroyRoles');


    /*   TipoNecesidadController   */
    Route::get('TipoNecesidad', 'TipoNecesidadController@index');
    Route::get('TipoNecesidad/{id}', 'TipoNecesidadController@show');
    Route::post('TipoNecesidadFiltro', 'TipoNecesidadController@filtro');
    Route::post('TipoNecesidad', 'TipoNecesidadController@create');
    Route::put('TipoNecesidad/{id}', 'TipoNecesidadController@update');
    Route::delete('TipoNecesidad/{id}', 'TipoNecesidadController@destroy');

    
    /*   RolesController   */
    Route::get('Roles', 'RolesController@index');
    Route::get('Roles/{id}', 'RolesController@show');
    Route::post('RolesFiltro', 'RolesController@filtro');
    Route::post('Roles', 'RolesController@create');
    Route::put('Roles/{id}', 'RolesController@update');
    Route::delete('Roles/{id}', 'RolesController@destroy');

    
    /*   PedidoController   */
    Route::get('Pedidos', 'PedidoController@index');
    Route::get('Pedidos/{id}', 'PedidoController@show');
    Route::post('Pedidos', 'PedidoController@create');
    Route::put('Pedidos/{id}', 'PedidoController@update');
    Route::delete('Pedidos/{id}', 'PedidoController@destroy');
    Route::get('PedidosTipos', 'PedidoController@tipos');

    
    /*   MeController   */
    Route::get('UserMe', 'MeController@user');
    Route::get('UserMe', 'MeController@roles');
    Route::put('UserMe/{id}', 'MeController@update');
});