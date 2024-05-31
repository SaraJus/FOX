<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria() {
        return view('categoria')-> with('categorias', Categoria::all());
        
    }

    public function categorias($categoria_nome)
    {
        // Busca a categoria pelo nome e verifica se está ativa
        $categoria = Categoria::where('CATEGORIA_NOME', $categoria_nome)->where('CATEGORIA_ATIVO', 1)->firstOrFail();
        return view('categoria', compact('categoria'));
    }

   
}
