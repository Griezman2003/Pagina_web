<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function validar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'email' => '| email | unique:forms',
            'password' => '',
            ]); 
            $usuario = new cuenta;
            $usuario->nombre = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = $request->pasword;
            
            $usuario->save();
            return back()-> with('success', 'formulario validado correctamente');

        }
}
