<?php

namespace App;
use App\Carro;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Add Usuario
    public function addUserPlate($data)
    {
        $this->addPlate($data);
        $idCar = $this->getlate($data->plate);
        return $this->addUser($data, $idCar);
    }

    public function addUser($data, $idCar)
    {
        try
        {
            $user = new User();
            $user->name         = $data->name;
            $user->fone_number  = $data->fone;
            $user->auto_id      = $idCar;
            $user->cpf          = $data->cpf;
            $res = $user->save();
            return $res;
        }
        catch (\Throwable $th)
        {
            $th->getMessage();
        }
    }

    /**
     * $plate string placa de carro
     * @return int id da placa
     */
    public function getlate($plate)
    {
        return Carro::get()->where('placa', $plate)->first()->id;
    }

    /**
     * adiciona uma placa 
     * essa funcao tem acoplamento com a function de
     * add addUserPlate() pois, so se add uma placa 
     * se add o user primeiro
     */
    public function addPlate($data)
    {
        $car = new Carro;
        $car->placa = $data->plate;
        $car->save();
    }

    // Edit Usuario
    public function updateUser($data, $idUser)
    {
        $newData                = [];
        $newData['name']        = $data->name;
        $newData['fone_number'] = $data->fone;
        $newData['auto_id']     = $data->idPlate;
        $newData['cpf']         = $data->cpf;

        $this->updateCarro($data->plate, $idUser);
        return User::where('id', $idUser )->update( $newData );
    }

    // Edit Carro
    public function updateCarro($plate, $idUser)
    {
        $idPlate = User::find($idUser)->auto_id;
        return Carro::where('id', $idPlate)->update( ['placa' => $plate] );
    }

    // Delete Usuario
    public static function destroy($id)
    {
        User::find($id)->delete();
    }

    // Get dados do cliente
    public static function getClientData($id)
    {
        $newData = [];

        // retornar apenas o necessario para aplicacao
        $data = User::where('id', $id)->first();
        $newData['id']          = $data->id;
        $newData['name']        = $data->name;
        $newData['fone_number'] = $data->fone_number;
        $newData['auto_id']     = $data->auto_id;
        $newData['plate']       = Carro::find($data->auto_id)->placa;
        $newData['cpf']         = $data->cpf;

        return $newData;
    }

    // get todos usuarios
    public function getAllUsers()
    {
        $usuarios = DB::table('users')
        ->select("users.id as userId", "users.name", "users.fone_number", "users.cpf", "carros.id", "carros.placa")
        ->join('carros', 'users.auto_id', '=', 'carros.id')
        ->get();
        return $usuarios;
    }

    /**
     * consulta os dados dos clientes
     * de acordo com o parametro passado 
     * que este e o valo do caractere final 
     * da placa desse cliente
     * 
     * $numEndPlate int 
     */
    public static function getClientesByEndPlate($numEndPlate)
    {
        $res = DB::table('users')
            ->select("users.id as userId", "users.name", "users.fone_number", "users.cpf", "carros.id", "carros.placa")
            ->join('carros', 'users.auto_id', '=', 'carros.id')
            ->where( "carros.placa", "like", "%$numEndPlate")
            ->get();
        return $res;
    }

}
