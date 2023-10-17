<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\User;
use App\Models\Cuenta;
class LoginController extends Controller
{
     public function registro()
     {
        return \view('pages.registro');
     }


    public function pagina()
    {
        return \view('pages.pagina');
    }
}