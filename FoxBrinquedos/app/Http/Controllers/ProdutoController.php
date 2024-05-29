<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;


use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produto(){

        return view('produto.produto')->with('produtos', Produto::paginate(10));
     ;
    }

    public function show(Produto $produto){
        return view('produto.show')->with('produto', $produto);
    }
    public function categoria($categoria_nome)
    {
        $categoria = Categoria::where('CATEGORIA_NOME', $categoria_nome)->firstOrFail();

        $produtos = Produto::where('CATEGORIA_ID', $categoria->CATEGORIA_ID)->get();

        return view('categoria', compact('produtos', 'categoria'));
    }




}
