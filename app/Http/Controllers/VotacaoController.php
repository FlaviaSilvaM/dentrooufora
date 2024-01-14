<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotacaoController extends Controller
{
    public function create()
    {
        // Renderize a view de criação de candidato
        return view('votacao.create');
    }
}
