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
            'email' => '| email | unique: cuentas', 'required',
            'password' => 'required',
            //'submit' => 'required',
            ]); 
            $usuario = new cuenta;
            $usuario->nombre = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = $request->pasword;
            
            $usuario->save();
            return redirect('/')-> with('success', 'formulario validado correctamente');

        }
}
