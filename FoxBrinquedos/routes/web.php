<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;



Route::get('', [IndexController::class, 'index'])->name('index');

Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('cadastro.index');

Route::get('/TelaLogin', [LoginController::class, 'TelaLogin'])->name('Login.index');

Route::get('/produto', [ProdutoController::class, 'produto'])->name('produto.index');

Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');


Route::get('/categoria/{categoria_nome}', [ProdutoController::class, 'categoria'])->name('categoria');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/carrinho', [CarrinhoController::class, 'carrinho'])->name('carrinho.index');
    Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
    Route::post('/carrinho/aumentar/{produtoId}', [CarrinhoController::class, 'aumentar'])->name('carrinho.aumentar');
    Route::post('/carrinho/diminuir/{produtoId}', [CarrinhoController::class, 'diminuir'])->name('carrinho.diminuir');
    Route::post('/carrinho/remover/{produtoId}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
});

require __DIR__ . '/auth.php';
