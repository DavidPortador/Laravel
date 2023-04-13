<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCEII</title>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Customs Styles -->
    <link rel="stylesheet" href="{{ asset('css/login.css?v='.rand()) }}">
</head>

<body>
    <div class="container">
        <div class="formulario">
            <img src="https://labmanufactura.net/SCEII/public/assets/logo.png" alt="logo"
                class="mx-auto d-block mb-3 icon-logo">
            <form class="form-login" method="post" action="{{ route('redireccion.login') }}">
                @csrf
                <h3 class="titulo">Iniciar Sesión</h3>
                <div class="inputContainer">
                    <input name="correo" type="email" class="input-login" id="correo" placeholder="a" required />
                    <label class="labelform">
                        <i class="fa-solid fa-envelope"></i> Correo:
                    </label>
                </div>
                <div class="inputContainer">
                    <input name="clave" type="password" class="input-login" id="clave" placeholder="a" required />
                    <label class="labelform">
                        <i class="fa-solid fa-key"></i> Contraseña:
                    </label>
                    <div onclick="showPassword()">
                        <i class="fa-solid fa-eye-slash eye" id="showPassword"></i>
                    </div>
                </div>
                <p class="labelformError" id="label_email_error">Usuario o contraseña incorrecta</p>
                <a href="">Olvide mi contraseña</a>
                <input type="submit" class="submitBtn mx-auto" value="Entrar" id="btn_send_request" />
                <label>¿No tienes una cuenta?</label>
                <br>
                <a href="/registro">Crear una cuenta</a>
                <br>
                <!--
                    <a href="https://play.google.com/store?hl=es" target="_bank">
                    <i class="fa-brands fa-google-play fa-2x"></i>
                </a>
                <a href="https://www.apple.com/mx/app-store/" target="_bank">
                    <i class="fa-brands fa-apple fa-2x"></i>
                </a>
                -->
            </form>
        </div>
    </div>
    <!-- Customs Scripts -->
    <script type="text/javascript" src="{{ asset('js/login.js?v='.rand()) }}"></script>
</body>

</html>