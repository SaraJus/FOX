<!DOCTYPE html>
<<<<<<< HEAD
<html lang="pt-br">
=======
<html lang="en">
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Brinquedo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            height: 100vh;
            width: 100%;
        }

        h2 {
            color: #432075;
            text-align: center;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin-top: 20px;
        }

        /* Linha header */
=======
    <title>Pedido Concluído</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        h1 {
            text-align: center;
            margin: 20px;
            color: #102B7B;
        }

>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }

<<<<<<< HEAD
        hr {
            border-color: #102B7B;
        }

        /* logo */
=======

>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .logo {
            height: 75px;
            width: 75px;
        }

<<<<<<< HEAD
=======

>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .botoesHeader {
            width: 50px;
        }

<<<<<<< HEAD
        /* navbar */
        .navBar {
            border-radius: 5px;
            align-items: center;
            justify-content: center;
        }

        .navBar a,
        .navBar .dropdown-toggle {
            color: #102B7B !important;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navBar a:hover,
        .navBar .dropdown-toggle:hover {
            color: #43ADDA !important;
            /* Yellow text color on hover */
        }

        .dropdown-menu {
            background-color: #ededed;
            /* Blue background for dropdown */
            border: none;
        }

        .dropdown-menu a {
            color: #102B7B !important;
            /* White text color for dropdown items */
        }

        .dropdown-menu a:hover {
            background-color: #102B7B !important;
            /* Darker blue on hover */
        }

        @media (max-width: 768px) {
            .navBar {
                flex-direction: column;
                align-items: center;
            }

            .navBar a,
            .navBar .dropdown-toggle {
                margin-bottom: 10px;
            }
        }

        /* produto */
        .info_produto {
            display: flex;
            flex-direction: column;
            float: right;
            margin-right: 350px;
            margin-top: -300px;
        }

        /* pagamento */
        .pagamentos {
            display: flex;
            gap: 10px;
            margin-left: 715px;
            margin-top: -100px;
        }

        /* 'Adicionar ao Carrinho' */
        .adicionar {
            background-color: orange;
            width: 200px;
            height: 40px;
            border-radius: 10px;
            text-align: left;
            margin-left: 200px;
        }

        /* descrição do produto */
        .descricao {
            width: 650px;
            height: 200px;
            background-color: bisque;
            display: flex;
            margin-top: 100px;
            margin-left: 330px;
            border-radius: 10px;
        }

        /* card do produto */
        .card_produto {
            margin-left: 300px;
            border: none;
            height: 400px;
            width: 1000px;
            margin-top: 30px;
            padding-bottom: 30px;
        }

        .card-title {
            font-size: 25px;
            text-transform: uppercase;
        }

        .card-text {
            font-size: 22px;
        }

        .title-desc {
            text-align: center;
            margin-top: 20px;
        }

        .card_produto img {
            width: 300px;
            padding-bottom: 20px;
        }

        /* botões de quantidade */
        .btn_adicionar {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        /* Estilos para o card do corpo do produto */
        .card-body2 {
            width: 100%;
            height: 250px;
            background-color: #ededed;
            border-radius: 5px;
            border: none;
            gap: 10px;
            margin-top: 50px;
            text-align: justify;
        }

        /* footer */
=======

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

>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        footer {
            background-color: #43adda;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
            margin-top: 30px;
        }

<<<<<<< HEAD
=======
        /* Estilos para imagens no footer */
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .imgFooter {
            width: 200px;
            height: 200px;
            position: relative;
        }

<<<<<<< HEAD
=======
        /* Estilos para ícones de redes sociais */
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        .redesImg {
            width: 50px;
            height: 50px;
        }

<<<<<<< HEAD
=======
        /* Estilos para o bloco de formas de pagamento */
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
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

        /* carrossel de imagens */
        .carousel-item img {
            width: auto;
            height: 350px;
            object-fit: fill;
        }

        /*CSS CARD SARA*/

        .img-top {
            width: 150px;
            height: 150px;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-left: 10px;
            margin-top: 5px;
        }

        .card-titlee {
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 2px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

        .card-textt {
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            padding-left: 5px;
            margin-top: 2px;
        }

        .cardd {
            background-color: white;
            text-align: center;
            margin: 10px;
        }

        .card-precoo {
            color: #432075;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-btn {
            width: 100%;
            background-color: #432075;
            border-color: #432075;
            color: white;
            font-weight: bold;
            position: relative;
        }

        .custom-btn:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }

        .btn-custom {
            background-color: #432075;
            color: white;
        }

        .btn-custom:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }



        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.5));
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 700px;
        }

        .dropbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .dropbtn:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .botoesHeader {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 700px;
        }

        .dropbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .dropbtn:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .botoesHeader {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            min-width: 200px;
            z-index: 1;
            animation: fadeIn 0.3s;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #102B7B;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #form-pesquisa {
            display: flex;
            align-items: center;
        }

        #form-pesquisa .logo {
            margin-right: 10px;
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        #search-input {
            width: 326px;
            padding-right: 35px;
            /* espaço para o ícone de pesquisa */
        }

        .btn-custom.fa-search {
            position: absolute;
            right: 10px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #102B7B;
        }
=======
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
    </style>
</head>

<body>
<<<<<<< HEAD


    <nav x-data="{ open: false }">
        <div class="line">
        </div>
        <div class="navbar navbar-light">
            <form id="form-pesquisa" class="form-inline nav-search" action="{{ route('pesquisar.produto') }}" method="GET">
                <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                <div class="search-container">
                    <input id="search-input" class="form-control" type="search" name="q" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-custom fa fa-search" type="submit"></button>
                </div>
            </form>

            <div>

                @if (Route::has('login'))
                @auth

                <div class="dropdown">
                    <button class="dropbtn">
                        <img class="botoesHeader" src="{{asset('user.png')}}" alt="User Icone">
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('profile.edit') }}">Editar seu Perfil</a>
                        <a href="{{ url('') }}">Meus pedidos</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Sair</a>

                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
                @endif
                @endauth
                @endif
            </div>
            <a type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></></a>

        </div>
    </nav>
    <hr>
    <div class="d-flex justify-content-center mb-2 mt-2 navBar">
        <a class="d-flex mr-3 nav-link" href="{{route('index')}}">HOME</a>
        <a class="d-flex mr-3 nav-link" href="{{route('produto.index')}}">BRINQUEDOS</a>
        <a class="nav-link dropdown-toggle" href="#" id="categoriaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIA
        </a>
        <ul class="dropdown-menu" aria-labelledby="categoriaDropdown">
            @foreach(\App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoriaItem)
            <a class="dropdown-item" href="{{ route('categoria', ['categoria_nome' => $categoriaItem->CATEGORIA_NOME]) }}">
                {{ $categoriaItem->CATEGORIA_NOME }}
            </a>
            @endforeach
        </ul>
        <a class="d-flex mr-3 nav-link" href="{{route('contato.index')}}">CONTATO</a>
    </div>
    <hr>
=======
    <header>
        <nav class="">
            <div class="line">
            </div>
            <div class="navbar navbar-light">
                <form class="form-inline nav-search">
                    <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                    <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
                    <i class="btn btn-custom fa fa-search" type="submit"></i>
                </form>
                <div>
                    <i type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></i>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('Login.index') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('cadastro.index') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Register
                    </a>
                    @endif
                    @endauth
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-3 mt-3 navBar">
                <a class="d-flex mr-3" href="">HOME</a>
                <a class="d-flex mr-3" href="{{asset('produto')}}">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="{{asset('contato')}}">CONTATO</a>
            </div>
            <hr>
>>>>>>> 4633fa5e6741ced4bd1d8830a72bb7f54657e8be
        </nav>
    </header>


    <div class="container mt-4 mb-3">
        <div class="card text-center">
            <div class="card-header">
                <h1>Pedido Concluído</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">Obrigado pela sua compra!</h5>
                <p class="card-text">Seu pedido foi realizado com sucesso. Em breve você receberá um e-mail com os detalhes da sua compra.</p>
                <a href="{{ route('index') }}" class="btn btn-primary">Voltar para a página inicial</a>
            </div>
        </div>
    </div>

    <footer class="d-flex">
        <img class="imgFooter" src="{{asset('logo.png')}}" alt="">
        <div class="redesSociais">
            <p>Acompanhe nossas redes sociais</p>
            <div class="d-flex">
                <a href=""><img class="redesImg" src="{{asset('insta.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('wpp.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('face.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('linked.png')}}" alt=""></a>
            </div>
            <a href="{{asset('contato')}}">
                <p>Fale Conosco</p>
            </a>
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