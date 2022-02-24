<?php
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Cadastro de novo cliente.
 */
Route::post('/cliente', 'UserController@store');

/*
 * Edição de um cliente já existente
 */
Route::put('/cliente/{id}', 'UserController@update');

/**
 * Remoção de um cliente existente
 */
Route::delete('/cliente/{id}', 'UserController@destroy');

/**
 * Consulta de dados de um cliente
 */
Route::get('/cliente/{id}', 'UserController@show' );

// get todos usuarios
Route::get( '/cliente', 'UserController@index' );

/* 
 * Consulta de todos os clientes cadastrados na base,
 * onde o último número da placa do carro é igual ao informado
*/
Route::get('/consulta/final-placa/{numero}', 'UserController@getClientesByEndPlate' );