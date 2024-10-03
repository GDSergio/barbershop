<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="https://i.ibb.co/Nrt3RWL/Logo.png" width="50" height="30">
        <a class="navbar-brand" href="#">Barbershop</a>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employees">Empleados</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about">
                        Sobre Nosotros
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservations">Hacer una reserva</a>
                </li>

            </ul>
            <a href="login" class="btn btn-danger my-2 my-sm-0">Login</a>
        </div>
    </nav>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">¡La mejor manera de reservar servicios online!</h1>
                <p class="lead">Somos los mejores especialistas en nuestro campo, ¡te ofrecemos servicios de barberia de calidad a un precio asequible!</p>
                <p>Horas de trabajo:</p>
                <ul>
                    <li><b><u>Lunes:</b></u> 08:00 - 17:00</li>
                    <li><b><u>Martes:</b></u> 08:00 - 17:00</li>
                    <li><b><u>Miercoles:</b></u> 07:00 - 16:00</li>
                    <li><b><u>Jueves:</b></u> 08:00 - 17:00</li>
                    <li><b><u>Viernes:</b></u> 09:00 - 18:00</li>
                    <li><b><u>Sabado:</b></u> 09:00 - 18:00</li>
                </ul>
                <p class="lead">Puedes encontrarnos aquí:</p>
                <p class="lead">
                    <?php include 'map.html'; ?>
                </p>
                <div style="height: 150px"></div>
            </div>
        </div>
    </div>

</body>

</html>
