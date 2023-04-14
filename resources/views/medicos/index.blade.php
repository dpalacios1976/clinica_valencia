@extends('templates.master')
@section('title', 'Medicos')
@section('title-module', 'Medicos')

@section('content')

    {{ Breadcrumbs::render('doctors_index') }}
    
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <a class="btn btn-outline-success" href="{{ route('doctors.create') }}" role="button" style="padding-top: 0.3rem; font-size: 0.95rem;">
                <i class="fa-solid fa-user-doctor"></i> Agregar nuevo medico
            </a>
        </div>

        <div class="col-md-9 col-sm-7">
            <form action="{{ route('doctors.index') }}" method="get">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">Medico</span>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Ingrese el nombre o cedula del medico a buscar">
                        </div>
                    </div>
            
                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">Especialidades</span>
                            <select name="speciality" id="speciality" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($especialidades as $especialidad)
                                    <option value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                                @empty
                                    <option value=""> --- Seleccione ---</option>
                                @endforelse
                            </select>
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
    
    <div class="table-responsive-md">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOMBRES</th>
                    <th>CORREO</th>
                    <th>ESTADO</th>
                    <th>FECHA REGISTRO</th>
                    <th>ESPECIALIDADES</th>
                    <th style="text-align: center; width: 26%">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($doctors as $doctor)
                    <tr class="{{ $doctor->state === 'Inactivo' ? 'text_inactive' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $doctor->names }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->state }}</td>
                        <td>{{ $doctor->created_at->diffForHumans() }} </td>
                        <td>
                            <ul>
                            @forelse ($doctor->specialties as $speciality)
                                <li>{{ $speciality->name }}</li>
                            @empty
                                <li>Sin especialidades registradas</li>
                            @endforelse
                            </ul>
                        </td>
                        
                        <td>
                            @if ($doctor->schedules_count > 0)
                                <a class="btn btn-outline-success" href="{{ route('doctors.schedules.edit', $doctor) }}" role="button">
                                    <i class="fa-solid fa-calendar-days"></i> Ver Horario
                                </a>
                            @else
                                <a class="btn btn-outline-info" href="{{ route('doctors.schedules', $doctor) }}" role="button">
                                    <i class="fa-solid fa-calendar-plus"></i> Crear Horario
                                </a>
                            @endif
                            <a class="btn btn-outline-success" href="{{ route('doctors.show', $doctor) }}" role="button">
                                <i class="fa-solid fa-file-lines"></i> Ver
                            </a>
                            @if ($doctor->state === 'Activo')
                                <a class="btn btn-outline-primary" href="{{ route('doctors.edit', $doctor) }}" role="button">
                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                </a>
                                <button type="button" class="btn btn-outline-warning" onclick="medicoInactive({{ $doctor->id }})">
                                    <i class="fa-solid fa-square-xmark"></i> Desactivar
                                </button>
                            @else
                                <button type="button" class="btn btn-outline-info" onclick="medicoActive({{ $doctor->id }})">
                                    <i class="fa-solid fa-square-xmark"></i> Activar
                                </button>
                            @endif

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center;">Sin registros o coincidencias por mostrar </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-sm-6 mt-2">
                {{ $doctors->links() }}
            </div>
        </div>
    </div>
        
@endsection


@section('script')
<script>
    function medicoInactive(doctor)
    {
        Swal.fire({
            title: 'Está seguro de desactivar este medico?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, desactivar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/doctors/inactive/'+doctor, form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                title: 'Desactivado!',
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

    function medicoActive(doctor)
    {
        Swal.fire({
            title: 'Está seguro de activar este medico?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, activar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/doctors/active/'+doctor, form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                title: 'Activado!',
                                text: response.data.message,
                                icon: 'success'
                            }).then(result => {
                                location.reload();
                            });
                        } else {

                            if (Object.entries(response.data.error).length > 0) 
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