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
            'email' => '',
            'password' => '',
            ]); 
            $usuario = User::create([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => bcrypt($request->input('password')),
            ]);
            
            $cuenta = new Cuenta([
                'nombre' => 'Blurry',
                'tipo' => 'Personal', // Define el tipo adecuado
                'descripcion' => 'hola de nuevo',
            ]);
            
            $usuario->cuenta()->save($cuenta);
}
}
