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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"

        </style>
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
            <li class="nav-item active">
                <a class="nav-link" href="employees">
                    Empleados
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservations">
                  Hacer una reserva
              </a>
          </li>
        </ul>
            <a href="login" class="btn btn-danger my-2 my-sm-0">Login</a>
    </div>
    </nav>

<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">¡Nuestros empleados!</h1>
        <div class="card-body table-responsive">
                 <table class="table table-hover">
                   <thead class="text-warning">
                     <tr>
                     <th>Nombre</th>
                     <th>Correo</th>
                     <th>Foto</th>
                     <th>Servicios</th>
                   </tr></thead>
                   <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->photo }}</td>
                            <td>@foreach($employee->services as $service)
                            Servicios: {{ $service->name }} Precio: {{ $service->price }}<br>
                            @endforeach
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div>
      <div style="height: 700px"></div>
      {{-- <p class="lead mb-0">You've reached the end!</p> --}}
    </div>
  </div>
</div>

    </body>
</html>



