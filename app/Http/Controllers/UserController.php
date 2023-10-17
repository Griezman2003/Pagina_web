<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cuenta;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function validar(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'email' => 'required|email|unique:users,email',
            'password' => '',
            ]); 
            $usuario = User::create([
                'nombre' => $request->input('nombre'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
            
            $cuenta = new Cuenta([
                'nombre' => 'NombreDeLaCuenta',
                'tipo' => 'TipoDeCuenta', // Define el tipo adecuado
                'descripcion' => 'Descripción de la cuenta',
            ]);
            
            $usuario->cuenta()->save($cuenta);
}
}
