<?php

namespace App\Http\Controllers;
use App\Models\Candidato;


use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index()
    {
       
        $candidatos = Candidato::all();
        return view('candidato.index', compact('candidatos'));
    }
    public function create()
    {
        // Renderize a view de criação de candidato
        return view('candidato.create');
    }

    public function store(Request $request)
    {
    $event = new Candidato();
    $event->nome = $request->nome;
    $event->foto = $request->foto;

    $event->save();

    return redirect()->route('candidato.create')->with('success', 'Candidato criada com sucesso!');

    }

}
