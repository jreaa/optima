<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class UpdateStatusClient extends Controller
{
    public function index($id){
        $cliente = Cliente::find($id);
        dd($cliente);
    }
}
