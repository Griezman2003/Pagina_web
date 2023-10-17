<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

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
=======
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
>>>>>>> refs/remotes/origin/main
            ]); 
            $usuario = new cuenta;
            $usuario->nombre = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
<<<<<<< HEAD
            
            $usuario->save();
            return back()-> with('success', 'formulario validado correctamente');
=======
            $usuario->save();
            return redirect('/')-> with('success', 'formulario validado correctamente');
>>>>>>> refs/remotes/origin/main

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
<<<<<<< HEAD
=======

>>>>>>> refs/remotes/origin/main
