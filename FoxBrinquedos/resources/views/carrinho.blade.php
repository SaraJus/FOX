<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        hr {
            border-color: #102B7B;
        }

        h2 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .logo {
            height: 75px;
            width: 75px;
        }

        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }

        .botoesHeader {
            width: 50px;
        }



        footer {
            background-color: #43adda;
            width: 100%;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
        }

        .imgFooter {
            width: 200px;
            height: 200px;
            left: 25px;
            position: relative;
        }

        .redesSociais {
            position: relative;
            top: 25px;
            left: 60px;
            height: 150px;
        }

        .redesImg {
            width: 50px;
            height: 50px;
        }

        .pagamento {
            position: absolute;
            padding-left: 1300px;
            margin-top: 40px;
            margin-right: 40px;
            right: 0px;
        }

        .pagamentoImg {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .pagamentoTxt {
            gap: 20px;
        }

        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        }

        .navBar :hover {
            color: #43ADDA;
        }

        .navBar:visited {
            color: #102B7B;
        }

        .card {
            background-color: white;
            margin: 40px;
            align-items: center;
        }

        .img-card-car {
            width: 100px;
            height: 100px;
            border-radius: 15px;
        }

        .btn-finish {
            margin-left: 10px;
            margin-right: 10px;
            background-color: #432075;
            border-color: #432075;
            color: white;
            font-weight: bold;
            position: relative;
            width: 300px;
        }

        .btn-finish:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }

        .my-cart {
            color: #102B7B;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .card-img-top {
            width: 100px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="">
            <div class="line">
            </div>
            <div class="navbar navbar-light">
                <form class="form-inline nav-search">
                    <a href="{{ route('index') }}"><img src="{{asset('logo.png')}}" alt="Logo" class="logo"></a>
                    <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
                    <i class="btn btn-custom fa fa-search" type="submit"></i>
                </form>
                <div>
                    <i type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></i>
                    <i type="button"><img class="botoesHeader" src="{{asset('user.png')}}" alt=""></i>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-3 mt-3 navBar">
                <a class="d-flex mr-3" href="">HOME</a>
                <a class="d-flex mr-3" href="">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>
    <section class="">
        <div class="container">
            <h1 class="mt-5 mb-5 my-cart d-flex justify-content-center">Meu Carrinho</h1>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if($carrinhoItens->isEmpty())
            <p class="mb-5 mt-5"><b>Seu carrinho está vazio.</b></p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrinhoItens as $item)
                    @if($item->ITEM_QTD > 0)
                    <tr>
                        @if($item->produto->Imagem->isNotEmpty())
                        <td>
                            <a href="{{ route('produto.show', $item->produto->PRODUTO_ID) }}">
                                <img src="{{ $item->produto->Imagem->first()->IMAGEM_URL }}" class="card-img-top" alt="...">
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="{{ route('produto.show', $item->produto->PRODUTO_ID) }}">
                                <img src="..." class="card-img-top" alt="Imagem Padrão">
                            </a>
                        </td>
                        @endif
                        <td>{{ $item->produto->PRODUTO_NOME }}</td>
                        <td>
                            <form action="{{ route('carrinho.aumentar', $item->PRODUTO_ID) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn">+</button>
                            </form>
                            {{ $item->ITEM_QTD }}
                            <form action="{{ route('carrinho.diminuir', $item->PRODUTO_ID) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn">-</button>
                            </form>
                        </td>
                        <td>R$ {{ number_format($item->produto->PRODUTO_PRECO, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($item->produto->PRODUTO_PRECO * $item->ITEM_QTD, 2, ',', '.') }}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="mt-1 mb-5 mr-5 d-flex justify-content-end">
                <strong>Total: R$ {{ number_format($carrinhoItens->sum(function($item) { return $item->produto->PRODUTO_PRECO * $item->ITEM_QTD; }), 2, ',', '.') }}</strong>
            </div>
            @endif
        </div>
        <div class="mb-5">
            <div class="gap-3 d-flex align-items-center justify-content-center">
                <a href="{{ route( 'produto.index' )}}">
                    <button class="btn btn-finish d-flex justify-content-center align-items-center mt-5">
                        <h3>Volte as compras!</h3>
                    </button>
                </a>
                <a href="">
                    <button class="btn btn-finish d-flex justify-content-center align-items-center mt-5" hr>
                        <h3>Continuar</h3>
                    </button>
                </a>
            </div>
        </div>
    </section>
    <footer class="d-flex bottom-0">
        <img class="imgFooter" src="{{asset('logo.png')}}" alt="">
        <div class="redesSociais">
            <p>Acompanhe nossas redes sociais</p>
            <div class="d-flex">
                <a href=""><img class="redesImg" src="{{asset('insta.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('wpp.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('face.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('linked.png')}}" alt=""></a>
            </div>
            <p>Fale Conosco</p>
            <p>Troca e Devolução</p>
        </div>
        <div class="pagamento">
            <p>Formas de Pagamento</p>
            <div class="d-flex">
                <img class="pagamentoImg" src="{{asset('cartao.png')}}" alt="">
                <img class="pagamentoImg" src="{{asset('boleto.png')}}" alt="">
                <img class="pagamentoImg" src="{{asset('pix.png')}}" alt="">
            </div>
            <div class="d-flex pagamentoTxt">
                <p>Cartão</p>
                <p>Boleto</p>
                <p>Pix</p>
            </div>
        </div>
    </footer>
</body>

</html>