<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    public function validate(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]); 
            $usuario = new cuenta;
            $usuario->nombre = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            
            $usuario->save();
            return back()-> with('success', 'formulario validado correctamente');

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
