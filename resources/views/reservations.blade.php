<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                <li class="nav-item">
                    <a class="nav-link" href="employees">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">Sobre Nosotros</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="reservations">
                        Hacer una reserva
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <a href="login" class="btn btn-danger my-2 my-sm-0">Login</a>
        </div>
    </nav>

    <form action="{{ url('createAppointment') }}" method="post">
        @csrf
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <h1 class="font-weight-light">¡Rellena el formulario y te estaremos esperando a tu llegada a la hora
                        que hayas especificado!</h1>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                            placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp" placeholder="ejemplo@ejemplo.com">
                        <small id="emailHelp" class="form-text text-muted">No compartiremos su informacion personal con
                            nadie</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefono</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber"
                            placeholder="+57">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Seleccione el barbero para su cita</label>
                        <select class="form-control" name="employee" id="employeeSelect">
                            <option value="{{ $employees->first()->id }}">--Seleccione--</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}"> {{ $employee->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">Seleccione un servicio</label>
                        <select class="form-control" name="services">
                            <option value = "{{ $services->first()->id }}">--Seleccione--</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"> {{ $service->name }} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="birthdaytime">Hora de Reserva</label>
                        {{-- <input type="datetime-local" class="form-control" id="birthdaytime" name="start_time"> --}}
                        <input type="text" class="form-control" id="birthdaytime" name="start_time">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Comentario adicionales (Opcional)</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="comments"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Reserva</button>
    </form>

    <div style="height: 150px"></div>
    </div>
    </div>
    </div>



</body>

</html>
<script>
  var disabledTimes = []; // Array para guardar los intervalos ocupados

  // Función para convertir el formato de la fecha
  function formatDateToFlatpickr(date) {
      return date.replace(" ", "T"); // Formato 'Y-m-d H:i:S' a 'Y-m-dTH:i'
  }

  // Inicializar flatpickr
  var flatpickrInstance = flatpickr("#birthdaytime", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      minDate: "today", // Solo permite seleccionar fechas futuras
      disable: [
          function(date) {
              // Deshabilitar las fechas que están ocupadas en el array
              return disabledTimes.some(function(timeRange) {
                  var start = new Date(timeRange.start).getTime();
                  var end = new Date(timeRange.end).getTime();
                  return date.getTime() >= start && date.getTime() <= end;
              });
          }
      ]
  });

  // Cuando cambia el empleado seleccionado
  $('#employeeSelect').on('change', function() {
      var employeeId = $(this).val();
      if (employeeId) {
          $.ajax({
              url: '{{ route('available.times') }}',
              type: 'POST',
              data: {
                  employee_id: employeeId,
                  _token: '{{ csrf_token() }}'
              },
              success: function(data) {
                  // Limpiar array de horarios ocupados
                  disabledTimes = [];

                  // Iterar sobre cada reserva recibida y agregar a disabledTimes
                  data.forEach(function(reservation) {
                      disabledTimes.push({
                          start: reservation.start_time,
                          end: reservation.finish_time
                      });
                  });

                  // Actualizar flatpickr con los nuevos horarios deshabilitados
                  flatpickrInstance.set('disable', [
                      function(date) {
                          return disabledTimes.some(function(timeRange) {
                              var start = new Date(timeRange.start).getTime();
                              var end = new Date(timeRange.end).getTime();
                              return date.getTime() >= start && date.getTime() <= end;
                          });
                      }
                  ]);
              }
          });
      } else {
          $('#birthdaytime').attr('disabled', 'disabled');
      }
  });
</script>
