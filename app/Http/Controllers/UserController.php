<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users      = new User;
        $usuarios   = $users->getAllUsers();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Armazena dados em BD
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $user = new User();
        /**
         * @return boolean
         */
        $user->addUserPlate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::getClientData($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = new User;
        $user->updateUser($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * nao deletoa partir da controller porque a
         * camada responsavel pode manupulacao do BD e a model
         * e nao a controller
         */
        return User::destroy($id);
    }

    /**
     * consulta os dados dos clientes
     * de acordo com o parametro passado 
     * que este e o valo do caractere final 
     * da placa desse cliente
     * 
     * $numEndPlate int 
     */
    public function getClientesByEndPlate($numEndPlate)
    {
        return User::getClientesByEndPlate($numEndPlate);
    }
}
