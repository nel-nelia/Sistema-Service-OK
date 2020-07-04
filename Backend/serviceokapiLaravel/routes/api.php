<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource("actividadtipo","ActividadTiposController");
Route::apiResource("actividad","ActividadsController");
Route::apiResource("calificacion","CalificacionsController");
Route::apiResource("entidad","EntidadsController");
Route::apiResource("establecimiento","EstablecimientosController");
Route::apiResource("persona","PersonasController");
Route::apiResource("representante","RepresentantesController");
Route::apiResource("rolactividad","RolActividadsController");
Route::apiResource("rolcalificacion","RolCalificacionsController");
Route::apiResource("rolestablecimiento","RolEstablecimientosController");
Route::apiResource("rolpersona","RolPersonasController");
Route::apiResource("rol","RolsController");
Route::apiResource("rolusuario","RolUsuariosController");
Route::apiResource("usuario","UsuariosController");
