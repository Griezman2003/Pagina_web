<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
