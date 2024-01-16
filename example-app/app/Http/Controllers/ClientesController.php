<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

    public function salvar(Request $request)
    {

        // echo $request['endereco'];
        // echo $request->all();

        $cliente = new Cliente();

        $cliente = $cliente->create([
            'nome' => $request['nome'],
            'endereco' => $request['endereco'],
            'numero' => $request['numero']
        ]);

        return $cliente;

    }
}
