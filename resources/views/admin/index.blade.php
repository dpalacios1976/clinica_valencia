@extends('templates.master')
@section('title', 'Users')
@section('title-module', 'Usuarios')

@section('content')

    {{ Breadcrumbs::render('management') }}

    <style>
        .ch{
            display: flex; 
            flex-direction: row; 
            justify-content: space-between;
        }
        i.icon{
            background: #cdeaf1;
            padding: 1rem;
            border-radius: 50%;
            color: #5bc0de;
            font-size: 2rem;
        }
        .text-card-info {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            padding: 0 1rem 0 0;
            /*border: 1px solid green;*/
        }
        span.number {
            font-size: 1.5rem;
            font-weight: 600;
        }
        span.letters {
            font-size: 1.1rem;
        }
        
    </style>

    <div class="row" style="padding: 0 1rem">
        <div class="col-md-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-header ch">
                    <div>
                        <i class="icon fa-solid fa-users-line"></i>
                    </div>
                    <div class="text-card-info">
                        <span class="number">{{ $users_count ?? 0 }}</span>
                        <span class="letters">Usuarios</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <label for="">Ultimos usuarios agregados</label>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Sin registros </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">
                        <span>Ir al listado de usuarios </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-header ch">
                    <div>
                        <i class="icon fa-solid fa-building-user"></i>
                    </div>
                    <div class="text-card-info">
                        <span class="number">{{ $roles_count ?? 0 }}</span>
                        <span class="letters">Roles</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <label for="">Ultimos roles agregados</label>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Rol</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $rol)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rol->name }}</td>
                                    <td>{{ $rol->created_at->diffForHumans() }} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Sin registros </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">
                        <span>Ir al listado de roles </span>
                    </a> --}}
                </div>
            </div>
        </div>
        
        
    </div>

@endsection