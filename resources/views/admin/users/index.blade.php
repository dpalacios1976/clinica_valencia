@extends('templates.master')
@section('title', 'Users')
@section('title-module', 'Usuarios')

@section('content')

    {{ Breadcrumbs::render('user_index') }}

    <style>
        .user-inactive
        {
            background: #f2ec8f
        }
    </style>

    <div class="buttonAdd" style="display: flex; flex-direction: row; gap: 3.5rem;">
        {{-- <h2 style="padding: 0.5rem 0 0 0.5rem">Listado de usuarios</h2> --}}
        <a class="btn btn-outline-success" href="{{ route('admin.users.create') }}" role="button" style="padding-top: 0.6rem; font-size: 1rem;">
            <i class="fa-solid fa-user-plus"></i> Agregar nuevo usuario
        </a>
    </div>
    <div class="table-responsive-md">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th style="text-align: center; width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr @class(['user-inactive' => $user->active === 'Inactivo'])>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->active }}</td>
                        <td>{{ $user->created_at->diffForHumans() }} </td>
                        <td>
                            <a class="btn btn-outline-success" href="{{ route('admin.users.show', $user) }}" role="button">
                                <i class="fa-solid fa-file-lines"></i> Ver
                            </a>
                            @if ($user->active === 'Activo')
                                <a class="btn btn-outline-primary" href="{{ route('admin.users.edit', $user) }}" role="button">
                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                </a>
                                <button type="button" class="btn btn-outline-warning" onclick="userInactive({{ $user->id }})">
                                    <i class="fa-solid fa-square-xmark"></i> Desactivar
                                </button>
                            @else
                                <button type="button" class="btn btn-outline-info" onclick="userActive({{ $user->id }})">
                                    <i class="fa-solid fa-square-check"></i> Activar
                                </button>
                            @endif
                            
                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Sin registros </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('script')
<script>
    function userInactive(user)
    {
        Swal.fire({
            title: 'Esta seguro de desactivar este usuario?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, desactivar!'
        }).then((result) => {
            if (result.isConfirmed) {
                const form_data = new FormData();
                axios.post('/management/users/inactive/'+user, form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                title: 'Desactivado!',
                                text: response.data.message,
                                icon: 'success'
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
                            icon: 'warning',
                            title: error.data.message,
                            text: error.data.error
                        })
                    });

                
            }
        })
    }

    function userActive(user)
    {
        Swal.fire({
            title: 'Está seguro de activar este usuario?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, activar !'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                const form_data = new FormData();
                axios.post('/management/users/active/'+user, form_data)
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


