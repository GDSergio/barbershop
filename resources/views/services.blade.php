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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" </style>
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
                <li class="nav-item active">
                    <a class="nav-link" href="services">
                        Servicios
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employees">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">Sobre Nosotros</a>
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
                <h1 class="font-weight-light">Nuestros Servicios:</h1>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <tr>
                                <th>Id</th>
                                <th>Servicio</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <?php include 'gallery.php'; ?>
                <div style="height: 200px"></div>
            </div>
        </div>
    </div>
</body>
</html>
