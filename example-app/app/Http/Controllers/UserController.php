<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function login()
    // {
    //     echo "oieee de tiago";
    // }
    
    public function index()
    {
       return view('usuarios', [
        'texto' => 'Bem vindo a lista de usuarios' ,
        'checagem' => false,
        'usuarios' => ['usuario1', 'usuario2', 'usuario3', 'usuario4']
        
    ]);
    }
}
