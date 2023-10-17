<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class FormController extends Controller
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
