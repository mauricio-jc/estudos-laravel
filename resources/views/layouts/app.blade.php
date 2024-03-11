<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Laravel</title>
        <style>
            .container-fluid {
                max-width: 98%;
                width: 98%;
                margin: 0 auto;
            }

            .pl-0 {
                padding-left: 0 !important;
            }

            .pr-0 {
                padding-right: 0 !important;
            }
        </style>
    </head>
    <body>
        <ul id="categories" class="dropdown-content">
            <li><a href="#!">Listar</a></li>
            <li><a href="#!">Cadastrar</a></li>
        </ul>
        <ul id="posts" class="dropdown-content">
            <li><a href="#!">Listar</a></li>
            <li><a href="#!">Cadastrar</a></li>
        </ul>
        <ul id="user" class="dropdown-content">
            <li><a href="#!">Sair</a></li>
        </ul>
        <nav>
            <div class="container-fluid nav-wrapper">
                <a href="{{ route('home') }}" class="brand-logo">Home</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="categories">
                            Categorias <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="posts">
                            Posts <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="user">
                            Olá Fulano <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- Compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.dropdown-trigger').dropdown({
                    coverTrigger: false,
                    belowOrigin: true
                });
            });
        </script>
    </body>
  </html>
