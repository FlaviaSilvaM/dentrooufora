<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
       
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }
    
    public function create()
    {
        // Renderize a view de criação de candidato
        return view('categoria.create');
    }

    public function store(Request $request)
    {
    $event = new Categoria();
    $event->nome = $request->nome;

    $event->save();

    return redirect()->route('categoria.create')->with('success', 'Categoria criada com sucesso!');

    }
}
