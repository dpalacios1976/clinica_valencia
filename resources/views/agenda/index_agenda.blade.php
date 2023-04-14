@extends('templates.master')
@section('title', 'Agenda')
@section('title-module', 'Agenda')

@section('content')

{{ Breadcrumbs::render('agendas_index') }}

<div class="row">
    <h3 class="mb-3">Agenda de todos los medicos</h3>

    <div class="col-md-10 col-sm-6">
        <form action="{{ route('agendas.index') }}" method="get">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">Medicos</span>
                        <select name="search" id="search" class="form-control">
                            <option value=""> --- Seleccione ---</option>
                            @forelse ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->names }}</option>
                            @empty
                                <option value=""> --- Sin registros por mostrar ---</option>
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
                <th>FECHA CITA</th>
                <th>MOTIVO</th>
                <th>PACIENTE</th>
                <th>MEDICO</th>
                <th>ESTADO</th>
                <th style="text-align: center; width: 26%">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agendas as $agenda)
                <tr class="{{ $agenda->state === 'Cancelada' ? 'text_inactive' : '' }} {{ $agenda->state === 'No asistio' ? 'text_inactive2' : '' }}">
                    <td>{{ $agenda->fecha_cita }}</td>
                    <td>{{ $agenda->motivo }}</td>
                    <td>{{ $agenda->patient->nombres }}</td>
                    <td>{{ $agenda->doctor->names }}</td>
                    <td>{{ $agenda->state }}</td>
                    {{-- <td>{{ $agenda->created_at->diffForHumans() }} </td> --}}
                    <td>
                        @if ($agenda->fecha_cita < date('Y-m-d') && $agenda->state !== 'No asistio' && $agenda->state !== 'Cancelada')
                            <button type="button" class="btn btn-outline-warning" onclick="agendaNoAsistio({{ $agenda->id }})">
                                <i class="fa-solid fa-user-slash"></i> No asistió
                            </button>
                        @endif
                        
                        @if ($agenda->fecha_cita > date('Y-m-d') && $agenda->state !== 'Cancelada' && $agenda->state !== 'No asistio')
                            <button type="button" class="btn btn-outline-danger" onclick="agendaCancelar({{ $agenda->id }})">
                                <i class="fa-solid fa-xmark"></i> Cancelar
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
            {{ $agendas->links() }}
        </div>
    </div>
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