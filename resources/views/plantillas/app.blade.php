<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Recursos-->
    <!--Es necesario que haya una linea de vite que indica al motor que está es una plantila que debemos actualizar--->
    @yield('head')

    <!--Icono de página-->
    <link rel="icon" href="{{ asset('img/1.ico')}}" />
    <!--Librerias de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body class="" style="background-color: #EFE670;">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #EFE670;">
        <div class="container-fluid">
            <a id="1" class="navbar-brand fw-bold text-success" style="font-size: 25px;" href="/">Pan Rico Pan</a>
            <!--Toggler Button Responsive-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-danger fw-bold" style="font-size: 20px;" href="/">Pan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger fw-bold" style="font-size: 20px;" href="/">Pasteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger fw-bold" style="font-size: 20px;" href="/">Recetas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" style="font-size: 20px;" data-bs-toggle="dropdown" aria-expanded="false">Conócenos</a>
                        <ul class="dropdown-menu" style="background-color: #EFE670;">
                            <li><a class="dropdown-item" href="/"><strong>¿Quienes somos?</strong></a></li>
                            <li><a class="dropdown-item" href="/"><strong>En donde nos ubicamos...</strong></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-danger fw-bold" style="font-size: 20px;" href="/">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger fw-bold" style="font-size: 20px;" href="/">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenidoPrincipal')

    <!--Pie de página-->
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5" style="display: flex; justify-content: center; background-color: #EFE670;">
        <p class="" style="color: black; font-weight: bold; text-align: center;">© 2023 Pan Rico Pan</p>
    </footer>

    @yield('contenidoJs')
    <!--Scripts de la página-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
