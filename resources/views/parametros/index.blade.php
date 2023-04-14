@extends('templates.master')
@section('title', 'Parametros')
@section('title-module', 'Parametros')

@section('content')

    {{ Breadcrumbs::render('establishment_index') }}
    
    <div class="row">
        @can('establishments.create')
            <div class="col-md-3 col-sm-3">
                <a class="btn btn-outline-success" href="{{ route('establishments.create') }}" role="button" style="padding-top: 0.3rem; font-size: 0.95rem;">
                    <i class="fa-solid fa-hospital"></i> Agregar nuevo establecimiento
                </a>
            </div>
        @endcan
    </div>

    <style>
        .text_inactive {
            background: #f2ec8f
        }
    </style>

    <div class="table-responsive-md">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>RUC</th>
                    <th>DIRECCION</th>
                    <th>ESTADO</th>
                    <th>FECHA REGISTRO</th>
                    <th style="text-align: center; width: 18%">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($establishments as $establishment)
                    <tr class="{{ $establishment->state === 'Inactivo' ? 'text_inactive' : '' }}">
                        <td>{{ $establishment->nombre_comercial }}</td>
                        <td>{{ $establishment->ruc }}</td>
                        <td>{{ $establishment->direccion }}</td>
                        <td>{{ $establishment->state }}</td>
                        <td>{{ $establishment->created_at->diffForHumans() }} </td>                        
                        <td>
                            <a class="btn btn-outline-success" href="{{ route('establishments.show', $establishment) }}" role="button">
                                <i class="fa-solid fa-file-lines"></i> Ver
                            </a>
                            @if ($establishment->state === 'Activo')
                                <a class="btn btn-outline-primary" href="{{ route('establishments.edit', $establishment) }}" role="button">
                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                </a>
                                <button type="button" class="btn btn-outline-warning" onclick="establecimientoInactive({{ $establishment->id }})">
                                    <i class="fa-solid fa-square-xmark"></i> Desactivar
                                </button>
                            @else
                                <button type="button" class="btn btn-outline-info" onclick="establecimientoActive({{ $establishment->id }})">
                                    <i class="fa-solid fa-square-xmark"></i> Activar
                                </button>
                            @endif

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center;">Sin registros por mostrar </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- <div class="row justify-content-md-center">
            <div class="col-md-8 col-sm-6 mt-2">
                {{ $establishments->links() }}
            </div>
        </div> --}}
    </div>
        
@endsection

@section('script')
<script>
    function establecimientoInactive(establishment)
    {
        Swal.fire({
            title: 'Está seguro de desactivar este establecimiento?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, desactivar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/establishments/inactive/'+establishment, form_data)
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

    function establecimientoActive(establishment)
    {
        Swal.fire({
            title: 'Está seguro de activar este establecimiento?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, activar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/establishments/active/'+establishment, form_data)
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
