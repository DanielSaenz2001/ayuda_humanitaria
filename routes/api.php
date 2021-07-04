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

});