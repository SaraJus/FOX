<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrinhoItem;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CarrinhoController extends Controller
{
    public function carrinho()
    {
        $usuarioId = auth()->id(); // Supondo que o usuário está autenticado
        $carrinhoItens = CarrinhoItem::where('USUARIO_ID', $usuarioId)->with('produto')->get();

        return view('carrinho', compact('carrinhoItens'));
    }

    public function adicionar(Request $request)
    {
        $usuarioId = auth()->id();
        $produtoId = $request->input('PRODUTO_ID');
        $quantidade = $request->input('quantidade');

        // Adiciona ou atualiza item no carrinho
        $carrinhoItem = CarrinhoItem::updateOrCreate(
            ['USUARIO_ID' => $usuarioId, 'PRODUTO_ID' => $produtoId],
            ['ITEM_QTD' => DB::raw("ITEM_QTD + $quantidade")]
        );

        return redirect()->route('carrinho')->with('success', 'Produto adicionado ao carrinho!');
    }

    public function remover($id)
    {
        $usuarioId = auth()->id();
        CarrinhoItem::where('USUARIO_ID', $usuarioId)->where('PRODUTO_ID', $id)->delete();

        return redirect()->route('carrinho')->with('success', 'Produto removido do carrinho!');
    }
}

