<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.lista');
    }
    
    public function novo()
    {
        return view('clientes.formulario');
    }
}
