<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\User;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function validar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'email' =>  'required',
            'password' => 'required'
            ]); 
            $usuario = new cuenta;
            $usuario->nombre = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            $usuario->save();
            return redirect('/')-> with('success', 'formulario validado correctamente');

        }
        public function registro()
        {
           return \view('pages.registro');
        }
   
   
       public function pagina()
       {
           return \view('pages.pagina');
       }
}

