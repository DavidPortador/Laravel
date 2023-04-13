<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Icono de la página -->
    <link rel="icon" href="https://labmanufactura.net/SCEII/public/assets/logo.png">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Customs Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css?v='.rand()) }}">
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <div class="sidebar-header text-center">
            <a href="#">
                <img src="https://labmanufactura.net/SCEII/public/assets/logo.png" class="center-block icon-logo" />
                <div class="user">
                    Nombre del usuario
                    <br>
                    Apellidos
                </div>
                <div class="tipouser">
                    Tipo de usuario
                </div>
            </a>
        </div>
        <a class="config"><i class="fas fa-gear fa-1x"></i> Configuración</a>
        <hr class="separador">
        <a class="perfil"><i class="fas fa-circle-user fa-1x"></i> Ver perfil</a>
        <hr class="separador">
        <a class="about"><i class="fa-solid fa-user-astronaut"></i> Acerca de nosotros</a>
        <hr class="separador">
        <a class="text-danger" id="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar sesión</a>
        <hr class="separador">
    </div>
    <div id="main">
        <div class="openbtn" onclick="side()">
            <img src="https://labmanufactura.net/SCEII/public/assets/logo.png" class="icon-sm" />
            <b>
                <div class="text-center">
                    SCEII
                </div>
                <div class="saludo">
                    Buenas Noches
                    <script>
                        if (screen.width < 767) { document.write("<br>"); }
                    </script>
                    Nombre del usuario
                </div>
            </b>
        </div>
        <div class="home">
            @yield('content')
        </div>
    </div>
</body>

<!-- Customs Scripts -->
<script type="text/javascript" src="{{ asset('js/home.js?v='.rand()) }}"></script>

</html>