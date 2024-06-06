<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        h1 {
            text-align: center;
            margin: 20px;
            color: #102B7B;
        }

<<<<<<< HEAD
=======
        h2 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        h3 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }


>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }


        .logo {
            height: 75px;
            width: 75px;
        }


        .botoesHeader {
            width: 50px;
        }


        hr {
            border-color: #102B7B;
        }

        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        }

        .navBar:hover {
            color: #43ADDA;
        }


        .navBar:visited {
            color: #102B7B;
        }

        /* resumo da compra */
        .resumo {
            display: flex;
            justify-content: space-between;
        }

        .endereco_entrega {
            margin-left: 50px;
            padding-bottom: 20px;
        }

        /* para poder manter do lado de finalizar */
        .finalizar-compra-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 0 50px;
        }

        /* resumo da compra fim */

        /* método de pagamento */
        .dropdown-pagamento {
            display: flex;
            flex-direction: column;
            gap: 0px;
            margin-left: 700px;
        }

        .dropdown-pagamento .col {
            margin-bottom: 10px;
        }

        .bloco2 {
            position: absolute;
            text-align: center;
        }

        /* método de pagamento */

        /* Estilos para o footer */
        footer {
            background-color: #43adda;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
            margin-top: 30px;
        }

        /* Estilos para imagens no footer */
        .imgFooter {
            width: 200px;
            height: 200px;
            position: relative;
        }

        /* Estilos para ícones de redes sociais */
        .redesImg {
            width: 50px;
            height: 50px;
        }

        /* Estilos para o bloco de formas de pagamento */
        .pagamento {
            position: absolute;
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
<<<<<<< HEAD
=======

        .btn-finish {
            margin-left: 10px;
            margin-right: 10px;
            background-color: #fff;
            border-color: #432075;
            color: #432075;
            font-weight: bold;
            position: relative;
            width: 300px;
        }

        .btn-finish:hover {
            background-color: #432075;
            top: -2px;
            border-bottom: 2px solid #432075;
            color: #fff;
        }

>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
    </style>
</head>

<body>

    <nav>
        <div class="line"></div>
        <div class="navbar navbar-light">
            <form class="form-inline nav-search">
                <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
<<<<<<< HEAD
                <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search"
                    style=" width:326px; ">
=======
                <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
                <i class="btn btn-custom fa fa-search" type="submit"></i>
            </form>
            <div>
                @auth
<<<<<<< HEAD
                    <a href="{{ url('/dashboard') }}" class="link">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="link">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="link">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
            
            <div class="dropdown">
                <i class="btn dropdown-toggle" type="button" id="cartDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
=======
                <a href="{{ url('/dashboard') }}" class="link">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="link">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="link">
                    Register
                </a>
                @endif
                @endauth
            </div>

            <div class="dropdown">
                <i class="btn dropdown-toggle" type="button" id="cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
                    <img class="botoesHeader" src="{{asset('cart.png')}}" alt="Cart">
                </i>
                <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="cartDropdown" style="width: 300px;">
                    <ul class="list-unstyled dropdown-list">
                        <li class="dropdown-total">Total: R$ 0,00</li>
                    </ul>
                    <button class="btn btn-primary w-100 mt-3" id="finalizar-compras">Finalizar Compras</button>
                </div>
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

<<<<<<< HEAD
    <h1>FINALIZAR COMPRA</h1>
    <div class="endereco_entrega">
        <h4>Endereço de entrega</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

    <div class="finalizar-compra-container">
        <div class="bloco-resumo">
            <div class="card text-center card mb-3" style="width: 300px;">
                <h5 class="card-header">Resumo da compra</h5>
                <div class="card-body">
                    <div class="resumo">
                        <p class="card-text">QTD:</p>
                        <p class="card-text">Preço:</p>
                    </div>
                    <div class="resumo">
                        <p class="card-text">Frete:</p>
                        <p>R$ 0</p>
                    </div>
                    <hr>
                    <div class="resumo">
                        <p class="card-text">Total:</p>
                        <p class="card-text">Valor total:</p>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="bloco2">
            <div class="dropdown-pagamento card text-center card mb-3" style="height: auto; width: 700px">
                <div class="row mb-2 ">
                    <div class="col-12">
                        <h4 class="card-header" style="margin-bottom: 20px;">Método de pagamento</h4>
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1"
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample1"
                                style="width: 200px;">PIX</a>
                        </p>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                cisas do pix
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12">
                        <p class="d-inline-flex gap-1">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2" style="width: 200px;">BOLETO BANCÁRIO</button>
                        </p>
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                coisas do boleto
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12">
                        <p class="d-inline-flex gap-1">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample3" aria-expanded="false"
                                aria-controls="multiCollapseExample3" style="width: 200px;">CRÉDITO</button>
                        </p>
                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                            <div class="card card-body">
                                coisas do CREDITO
                            </div>
                           
                        </div>
                        
                    </div>
                    
                </div>
                <button class="btn btn-primary">Finalizar</button>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
=======
    <div class="container">
        <h2 class="mt-5 mb-5">Finalizar Compra</h2>

        <!-- Resumo da compra -->
        <div class="d-flex">
            <div class="bloco-resumo">
                <div class="card text-center card mb-3" style="width: 300px;">
                    <h3 class="card-header">Resumo da compra</h3>
                    <div class="card-body">
                        <div class="resumo">
                            <p class="card-text">QTD:</p>
                            <p class="card-text">{{ $quantidadeTotal }}</p>
                        </div>
                        <div class="resumo">
                            <p class="card-text">Preço:</p>
                            <p class="card-text">R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
                        </div>
                        <div class="resumo">
                            <p class="card-text">Frete:</p>
                            <p>R$ 0</p>
                        </div>
                        <hr>
                        <div class="resumo">
                            <p class="card-text">Total:</p>
                            <p class="card-text">R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de endereços -->
            <div class="ml-5">

                <form action="{{ route('pedido.finalizar') }}" method="POST">
                    <div class="d-flex">
                        <div class="conteiner mr-5">
                            <h3>Escolha um Endereço para a Entrega</h3>
                            @csrf

                            <div class="form-group">
                                @foreach($enderecos as $endereco)
                                <hr>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="endereco_id" id="endereco{{ $endereco->ENDERECO_ID }}" value="{{ $endereco->ENDERECO_ID }}" required>
                                    <label class="form-check-label" for="endereco{{ $endereco->ENDERECO_ID }}">
                                        {{ $endereco->ENDERECO_LOGRADOURO }}, {{ $endereco->ENDERECO_NUMERO }}{{ $endereco->ENDERECO_COMPLEMENTO ? ', ' . $endereco->ENDERECO_COMPLEMENTO : '' }} - {{ $endereco->ENDERECO_CEP }}, {{ $endereco->ENDERECO_CIDADE }} - {{ $endereco->ENDERECO_ESTADO }}
                                    </label>
                                </div>
                                @endforeach
                                <hr>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-finish">Finalizar Pedido</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
</body>

</html>