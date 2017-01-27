<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// para el registro e ingreso de los usuarios

Route::get('login', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('login', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'login'
]);
Route::get('logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'logout'
]);

//******** para la recuperacion de contrasenas

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// registration routes
Route::get('registro', [
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::POST('registro', [
    'uses'  => 'Auth\AuthController@POSTRegister',
    'as'    => 'register'
]);

// para ususarios autenticados

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);

    // para las gestiones de autoevaluacion *******************************

    Route::get('gestiones_autoevaluacion', [
        'uses'  => 'YearController@getGestiones',
        'as'    => 'getGestiones'
    ]);

    Route::get('agregar_gestion', [
        'uses'  => 'YearController@getAgregarGestion',
        'as'    => 'getAgregarGestion'
    ]);

    Route::post('agregar_gestion', [
        'uses'  => 'YearController@postAgregarGestion',
        'as'    => 'postAgregarGestion'
    ]);

    // para la autoevaluacion *******************************

    Route::get('autoevaluacion/{id}', [
        'uses'  => 'AutoevaluacionController@getAutoevaluacion',
        'as'    => 'getAutoevaluacion'
    ]);

    Route::get('editar_autoevaluacion/{id}', [
        'uses'  => 'AutoevaluacionController@getEditarEvaluacion',
        'as'    => 'getEditarEvaluacion'
    ]);

    Route::post('editar_autoevaluacion', [
        'uses'  => 'AutoevaluacionController@postEditarEvaluacion',
        'as'    => 'postEditarEvaluacion'
    ]);

    Route::get('grafico_eval/{id}', [
        'uses'  => 'AutoevaluacionController@getGrafico',
        'as'    => 'getGrafico'
    ]);

    // para las unidades de formacion *******************************

    Route::get('unidad', [
        'uses'  => 'UnityController@unidades',
        'as'    => 'unidad'
    ]);

    Route::get('agregar_unidad', [
        'uses'  => 'UnityController@agregarUnidad',
        'as'    => 'agregarUnidad'
    ]);

    Route::post('agregar_unidad', [
        'uses'  => 'UnityController@guardarUnidad',
        'as'    => 'guardarUnidad'
    ]);

    Route::get('editar_unidad/{id}', [
        'uses'  => 'UnityController@editarUnidad',
        'as'    => 'editarUnidad'
    ]);

    Route::put('actualizar_unidad', [
        'uses'  => 'UnityController@actualizarUnidad',
        'as'    => 'actualizarUnidad'
    ]);

    Route::get('eliminar_unidad/{id}', [
        'uses'  => 'UnityController@borrarUnidad',
        'as'    => 'borrarUnidad'
    ]);

    // para los usuarios **************************************************************

    Route::get('usuarios/{id}', [       // respecto de la unidad
        'uses'  => 'UserController@user',
        'as'    => 'user'
    ]);

    Route::get('usuarios', [
        'uses'  => 'UserController@usuarios',
        'as'    => 'usuarios'
    ]);

    Route::get('editar_usuario/{id}', [
        'uses'  => 'UserController@editarUsuario',
        'as'    => 'editarUsuario'
    ]);

    Route::post('editar_usuario', [
        'uses'  => 'UserController@guardarUsuario',
        'as'    => 'guardarUsuario'
    ]);

    Route::get('desactivar_usuario/{id}', [
        'uses'  => 'UserController@desactivarUsuario',
        'as'    => 'desactivarUsuario'
    ]);

    Route::get('activar_usuario/{id}', [
        'uses'  => 'UserController@activarUsuario',
        'as'    => 'activarUsuario'
    ]);

    Route::get('nuevo_usuario', [
        'uses'  => 'UserController@nuevoUsuario',
        'as'    => 'nuevoUsuario'
    ]);

    Route::post('actualizar_usuario', [
        'uses'  => 'UserController@actualizarUsuario',
        'as'    => 'actualizarUsuario'
    ]);

    // para los cargos **************************************************************
    
    Route::get('cargo', [
        'uses'  => 'UserController@cargo',
        'as'    => 'cargo'
    ]);

//    Route::get('nuevo_cargo', [
//        'uses'  => 'CargoController@nuevoCargo',
//        'as'    => 'nuevoCargo'
//    ]);
//
//    Route::post('guardar_cargo', [
//        'uses'  => 'CargoController@guardarCargo',
//        'as'    => 'guardarCargo'
//    ]);
//
//    Route::get('editar_cargo/{id}', [
//        'uses'  => 'CargoController@editarCargo',
//        'as'    => 'editarCargo'
//    ]);
//
//    Route::post('actualizar_cargo', [
//        'uses'  => 'CargoController@actualizarCargo',
//        'as'    => 'actualizarCargo'
//    ]);
//
//    Route::get('borrar_cargo/{id}', [
//        'uses'  => 'CargoController@borrarCargo',
//        'as'    => 'borrarCargo'
//    ]);

    //**************** para cambiar conrasena **********************

    Route::get('cambiar_pass', [
        'uses'  => 'HomeController@cambiarPassword',
        'as'    => 'cambiarPassword'
    ]);

    Route::put('cambiar_pass', [
        'uses'  => 'HomeController@cambiadoPassword',
        'as'    => 'cambiadoPassword'
    ]);
});