@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_index') }}

<div class="row">
    <div class="col-md-3 col-sm-3">
        <a class="btn btn-outline-success" href="{{ route('patients.create') }}" role="button" style="padding-top: 0.3rem; font-size: 0.95rem;">
            <i class="fa-solid fa-user-plus"></i> Agregar nuevo paciente
        </a>
    </div>

    <div class="col-md-9 col-sm-7">
        <form action="{{ route('patients.index') }}" method="get">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">Paciente</span>
                        <input type="text" name="search" id="search" class="form-control" placeholder="Ingrese el apellido,nombre o cedula del paciente a buscar">
                    </div>
                </div>
        
                <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fa-solid fa-magnifying-glass"></i> Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card-body">
    @if (session('notification'))
      <div class="alert alert-success" role="alert">
          {{ session('notification') }}
      </div>
    @endif

  </div>
  
<div class="table-responsive-md">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>CORREO</th>
                <th>EDAD</th>
                <th>CITAS AGENDADAS</th>
                <th style="text-align: center; width: 20%">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($patients as $patient)
        
            <tr class="{{ $patient->state === 'Inactivo' ? 'text_inactive' : '' }}">
                <td>{{ $patient->nombres }}</td>
                <td>{{ $patient->identificacion }}</td>
                <td>{{ $patient->mail }}</td>
                <td>{{ \Carbon\Carbon::parse($patient->fecha_nacimiento)->age }}</td>
                <td>
                    <ul>
                        @if (count($patient->agendas) > 0)
                            @forelse ($patient->agendas as $agenda)
                                <li class="mb-2">{{ $agenda->fecha_cita }}
                                    @if ($agenda->fecha_cita < date('Y-m-d'))
                                        <button type="button" class="btn btn-outline-warning btn-sm" onclick="agendaNoAsistio({{ $agenda->id }})">
                                            <i class="fa-solid fa-user-slash"></i> No asistió
                                        </button>
                                    @else
                                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="agendaCancelar({{ $agenda->id }})">
                                        <i class="fa-solid fa-xmark"></i> Cancelar
                                    </button>
                                    @endif
                                </li>
                            @empty
                                <li>Sin especialidades registradas</li>
                            @endforelse
                        @else
                            <span> - </span>
                        @endif
                        
                    </ul>
                </td>
                <td>
                    <a class="btn btn-outline-success" href="{{ route('patients.date', $patient) }}" role="button">
                        <i class="fa-solid fa-calendar-days"></i> Agendar cita
                    </a>
                    <a class="btn btn-outline-info" href="{{ route('patients.show', $patient) }}" role="button">
                        <i class="fa-solid fa-file-lines"></i> Ver
                    </a>
                    <a class="btn btn-outline-primary" href="{{ route('patients.edit', $patient) }}" role="button">
                        <i class="fa-solid fa-pen-to-square"></i> Editar
                    </a>

                    <a class="btn btn-outline-primary" href="{{ route('patients.familiar', $patient) }}" role="button">
                        <i class="fa-solid fa-person"></i> Conyuge
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align: center;">Sin registros o coincidencias por mostrar </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection

@section('script')
<script>
    function agendaCancelar(agenda)
    {
        Swal.fire({
            title: 'Está seguro de cancelar esta cita?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cancelar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/agendas/cancelar/'+agenda, form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                title: 'Cancelada!',
                                text: response.data.message,
                                icon: 'success',
                                // allowOutsideClick: false
                            }).then(result => {
                                location.reload();
                            });
                        } else {

                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error
                                })
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error
                        })
                    });
            }
        })
    }

    function agendaNoAsistio(agenda)
    {
        Swal.fire({
            title: 'Está seguro de cambiar el estado de la cita como: No asistio?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cambiar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/agendas/noasistio/'+agenda, form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                title: 'No asistio!',
                                text: response.data.message,
                                icon: 'success',
                                // allowOutsideClick: false
                            }).then(result => {
                                location.reload();
                            });
                        } else {

                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error
                                })
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error
                        })
                    });
            }
        })
    }
</script>
@endsection