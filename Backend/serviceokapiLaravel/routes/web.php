<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'actividad_tipos',
], function () {
    Route::get('/', 'ActividadTiposController@index')
         ->name('actividad_tipos.actividad_tipo.index');
    Route::get('/create','ActividadTiposController@create')
         ->name('actividad_tipos.actividad_tipo.create');
    Route::get('/show/{actividadTipo}','ActividadTiposController@show')
         ->name('actividad_tipos.actividad_tipo.show')->where('id', '[0-9]+');
    Route::get('/{actividadTipo}/edit','ActividadTiposController@edit')
         ->name('actividad_tipos.actividad_tipo.edit')->where('id', '[0-9]+');
    Route::post('/', 'ActividadTiposController@store')
         ->name('actividad_tipos.actividad_tipo.store');
    Route::put('actividad_tipo/{actividadTipo}', 'ActividadTiposController@update')
         ->name('actividad_tipos.actividad_tipo.update')->where('id', '[0-9]+');
    Route::delete('/actividad_tipo/{actividadTipo}','ActividadTiposController@destroy')
         ->name('actividad_tipos.actividad_tipo.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'actividads',
], function () {
    Route::get('/', 'ActividadsController@index')
         ->name('actividads.actividad.index');
    Route::get('/create','ActividadsController@create')
         ->name('actividads.actividad.create');
    Route::get('/show/{actividad}','ActividadsController@show')
         ->name('actividads.actividad.show')->where('id', '[0-9]+');
    Route::get('/{actividad}/edit','ActividadsController@edit')
         ->name('actividads.actividad.edit')->where('id', '[0-9]+');
    Route::post('/', 'ActividadsController@store')
         ->name('actividads.actividad.store');
    Route::put('actividad/{actividad}', 'ActividadsController@update')
         ->name('actividads.actividad.update')->where('id', '[0-9]+');
    Route::delete('/actividad/{actividad}','ActividadsController@destroy')
         ->name('actividads.actividad.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'calificacions',
], function () {
    Route::get('/', 'CalificacionsController@index')
         ->name('calificacions.calificacion.index');
    Route::get('/create','CalificacionsController@create')
         ->name('calificacions.calificacion.create');
    Route::get('/show/{calificacion}','CalificacionsController@show')
         ->name('calificacions.calificacion.show')->where('id', '[0-9]+');
    Route::get('/{calificacion}/edit','CalificacionsController@edit')
         ->name('calificacions.calificacion.edit')->where('id', '[0-9]+');
    Route::post('/', 'CalificacionsController@store')
         ->name('calificacions.calificacion.store');
    Route::put('calificacion/{calificacion}', 'CalificacionsController@update')
         ->name('calificacions.calificacion.update')->where('id', '[0-9]+');
    Route::delete('/calificacion/{calificacion}','CalificacionsController@destroy')
         ->name('calificacions.calificacion.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'entidads',
], function () {
    Route::get('/', 'EntidadsController@index')
         ->name('entidads.entidad.index');
    Route::get('/create','EntidadsController@create')
         ->name('entidads.entidad.create');
    Route::get('/show/{entidad}','EntidadsController@show')
         ->name('entidads.entidad.show')->where('id', '[0-9]+');
    Route::get('/{entidad}/edit','EntidadsController@edit')
         ->name('entidads.entidad.edit')->where('id', '[0-9]+');
    Route::post('/', 'EntidadsController@store')
         ->name('entidads.entidad.store');
    Route::put('entidad/{entidad}', 'EntidadsController@update')
         ->name('entidads.entidad.update')->where('id', '[0-9]+');
    Route::delete('/entidad/{entidad}','EntidadsController@destroy')
         ->name('entidads.entidad.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'personas',
], function () {
    Route::get('/', 'PersonasController@index')
         ->name('personas.persona.index');
    Route::get('/create','PersonasController@create')
         ->name('personas.persona.create');
    Route::get('/show/{persona}','PersonasController@show')
         ->name('personas.persona.show')->where('id', '[0-9]+');
    Route::get('/{persona}/edit','PersonasController@edit')
         ->name('personas.persona.edit')->where('id', '[0-9]+');
    Route::post('/', 'PersonasController@store')
         ->name('personas.persona.store');
    Route::put('persona/{persona}', 'PersonasController@update')
         ->name('personas.persona.update')->where('id', '[0-9]+');
    Route::delete('/persona/{persona}','PersonasController@destroy')
         ->name('personas.persona.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'usuarios',
], function () {
    Route::get('/', 'UsuariosController@index')
         ->name('usuarios.usuario.index');
    Route::get('/create','UsuariosController@create')
         ->name('usuarios.usuario.create');
    Route::get('/show/{usuario}','UsuariosController@show')
         ->name('usuarios.usuario.show')->where('id', '[0-9]+');
    Route::get('/{usuario}/edit','UsuariosController@edit')
         ->name('usuarios.usuario.edit')->where('id', '[0-9]+');
    Route::post('/', 'UsuariosController@store')
         ->name('usuarios.usuario.store');
    Route::put('usuario/{usuario}', 'UsuariosController@update')
         ->name('usuarios.usuario.update')->where('id', '[0-9]+');
    Route::delete('/usuario/{usuario}','UsuariosController@destroy')
         ->name('usuarios.usuario.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'representantes',
], function () {
    Route::get('/', 'RepresentantesController@index')
         ->name('representantes.representante.index');
    Route::get('/create','RepresentantesController@create')
         ->name('representantes.representante.create');
    Route::get('/show/{representante}','RepresentantesController@show')
         ->name('representantes.representante.show')->where('id', '[0-9]+');
    Route::get('/{representante}/edit','RepresentantesController@edit')
         ->name('representantes.representante.edit')->where('id', '[0-9]+');
    Route::post('/', 'RepresentantesController@store')
         ->name('representantes.representante.store');
    Route::put('representante/{representante}', 'RepresentantesController@update')
         ->name('representantes.representante.update')->where('id', '[0-9]+');
    Route::delete('/representante/{representante}','RepresentantesController@destroy')
         ->name('representantes.representante.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'establecimientos',
], function () {
    Route::get('/', 'EstablecimientosController@index')
         ->name('establecimientos.establecimiento.index');
    Route::get('/create','EstablecimientosController@create')
         ->name('establecimientos.establecimiento.create');
    Route::get('/show/{establecimiento}','EstablecimientosController@show')
         ->name('establecimientos.establecimiento.show')->where('id', '[0-9]+');
    Route::get('/{establecimiento}/edit','EstablecimientosController@edit')
         ->name('establecimientos.establecimiento.edit')->where('id', '[0-9]+');
    Route::post('/', 'EstablecimientosController@store')
         ->name('establecimientos.establecimiento.store');
    Route::put('establecimiento/{establecimiento}', 'EstablecimientosController@update')
         ->name('establecimientos.establecimiento.update')->where('id', '[0-9]+');
    Route::delete('/establecimiento/{establecimiento}','EstablecimientosController@destroy')
         ->name('establecimientos.establecimiento.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rols',
], function () {
    Route::get('/', 'RolsController@index')
         ->name('rols.rol.index');
    Route::get('/create','RolsController@create')
         ->name('rols.rol.create');
    Route::get('/show/{rol}','RolsController@show')
         ->name('rols.rol.show')->where('id', '[0-9]+');
    Route::get('/{rol}/edit','RolsController@edit')
         ->name('rols.rol.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolsController@store')
         ->name('rols.rol.store');
    Route::put('rol/{rol}', 'RolsController@update')
         ->name('rols.rol.update')->where('id', '[0-9]+');
    Route::delete('/rol/{rol}','RolsController@destroy')
         ->name('rols.rol.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rol_establecimientos',
], function () {
    Route::get('/', 'RolEstablecimientosController@index')
         ->name('rol_establecimientos.rol_establecimiento.index');
    Route::get('/create','RolEstablecimientosController@create')
         ->name('rol_establecimientos.rol_establecimiento.create');
    Route::get('/show/{rolEstablecimiento}','RolEstablecimientosController@show')
         ->name('rol_establecimientos.rol_establecimiento.show')->where('id', '[0-9]+');
    Route::get('/{rolEstablecimiento}/edit','RolEstablecimientosController@edit')
         ->name('rol_establecimientos.rol_establecimiento.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolEstablecimientosController@store')
         ->name('rol_establecimientos.rol_establecimiento.store');
    Route::put('rol_establecimiento/{rolEstablecimiento}', 'RolEstablecimientosController@update')
         ->name('rol_establecimientos.rol_establecimiento.update')->where('id', '[0-9]+');
    Route::delete('/rol_establecimiento/{rolEstablecimiento}','RolEstablecimientosController@destroy')
         ->name('rol_establecimientos.rol_establecimiento.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rol_actividads',
], function () {
    Route::get('/', 'RolActividadsController@index')
         ->name('rol_actividads.rol_actividad.index');
    Route::get('/create','RolActividadsController@create')
         ->name('rol_actividads.rol_actividad.create');
    Route::get('/show/{rolActividad}','RolActividadsController@show')
         ->name('rol_actividads.rol_actividad.show')->where('id', '[0-9]+');
    Route::get('/{rolActividad}/edit','RolActividadsController@edit')
         ->name('rol_actividads.rol_actividad.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolActividadsController@store')
         ->name('rol_actividads.rol_actividad.store');
    Route::put('rol_actividad/{rolActividad}', 'RolActividadsController@update')
         ->name('rol_actividads.rol_actividad.update')->where('id', '[0-9]+');
    Route::delete('/rol_actividad/{rolActividad}','RolActividadsController@destroy')
         ->name('rol_actividads.rol_actividad.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rol_personas',
], function () {
    Route::get('/', 'RolPersonasController@index')
         ->name('rol_personas.rol_persona.index');
    Route::get('/create','RolPersonasController@create')
         ->name('rol_personas.rol_persona.create');
    Route::get('/show/{rolPersona}','RolPersonasController@show')
         ->name('rol_personas.rol_persona.show')->where('id', '[0-9]+');
    Route::get('/{rolPersona}/edit','RolPersonasController@edit')
         ->name('rol_personas.rol_persona.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolPersonasController@store')
         ->name('rol_personas.rol_persona.store');
    Route::put('rol_persona/{rolPersona}', 'RolPersonasController@update')
         ->name('rol_personas.rol_persona.update')->where('id', '[0-9]+');
    Route::delete('/rol_persona/{rolPersona}','RolPersonasController@destroy')
         ->name('rol_personas.rol_persona.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rol_calificacions',
], function () {
    Route::get('/', 'RolCalificacionsController@index')
         ->name('rol_calificacions.rol_calificacion.index');
    Route::get('/create','RolCalificacionsController@create')
         ->name('rol_calificacions.rol_calificacion.create');
    Route::get('/show/{rolCalificacion}','RolCalificacionsController@show')
         ->name('rol_calificacions.rol_calificacion.show')->where('id', '[0-9]+');
    Route::get('/{rolCalificacion}/edit','RolCalificacionsController@edit')
         ->name('rol_calificacions.rol_calificacion.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolCalificacionsController@store')
         ->name('rol_calificacions.rol_calificacion.store');
    Route::put('rol_calificacion/{rolCalificacion}', 'RolCalificacionsController@update')
         ->name('rol_calificacions.rol_calificacion.update')->where('id', '[0-9]+');
    Route::delete('/rol_calificacion/{rolCalificacion}','RolCalificacionsController@destroy')
         ->name('rol_calificacions.rol_calificacion.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rol_usuarios',
], function () {
    Route::get('/', 'RolUsuariosController@index')
         ->name('rol_usuarios.rol_usuario.index');
    Route::get('/create','RolUsuariosController@create')
         ->name('rol_usuarios.rol_usuario.create');
    Route::get('/show/{rolUsuario}','RolUsuariosController@show')
         ->name('rol_usuarios.rol_usuario.show')->where('id', '[0-9]+');
    Route::get('/{rolUsuario}/edit','RolUsuariosController@edit')
         ->name('rol_usuarios.rol_usuario.edit')->where('id', '[0-9]+');
    Route::post('/', 'RolUsuariosController@store')
         ->name('rol_usuarios.rol_usuario.store');
    Route::put('rol_usuario/{rolUsuario}', 'RolUsuariosController@update')
         ->name('rol_usuarios.rol_usuario.update')->where('id', '[0-9]+');
    Route::delete('/rol_usuario/{rolUsuario}','RolUsuariosController@destroy')
         ->name('rol_usuarios.rol_usuario.destroy')->where('id', '[0-9]+');
});
