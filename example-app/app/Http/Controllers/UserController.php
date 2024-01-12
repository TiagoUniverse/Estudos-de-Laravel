<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        echo "oieee de tiago";
    }
    
    public function index()
    {
       return view('usuarios', ['texto' => 'Oieee com blade' ]);
    }
}
