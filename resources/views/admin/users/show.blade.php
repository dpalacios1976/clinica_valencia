@extends('templates.master')
@section('title', 'Users')
@section('title-module', 'Usuarios')

@section('content')

    {{ Breadcrumbs::render('user_show', $user) }}

    <div class="card border-success">
        <div class="card-body">
            <h3 class="mb-3">Datos del usuario</h3>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre y apellido</span>
                        <input type="text" name="fullname" id="fullname" class="form-control" value="{{ old('fullname', $user->name) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Cedula</span>
                        <input type="text" name="cedula" id="cedula" class="form-control" value="{{ old('cedula', $user->cedula) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Usuario</span>
                        <input type="text" name="user" id="user" class="form-control" value="{{ old('user', $user->username) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-badge"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Correo</span>
                        <input type="email" name="mail" id="mail" class="form-control" aria-label="Correo" value="{{ old('mail', $user->email) }}"  disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-at"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="div-roles">
                        <h4 for="">Roles</h4>
                        <ul class="list-roles">
                            @forelse ($user->roles as $rol)
                                <li>
                                    <input type="checkbox" 
                                        name="roles" 
                                        id="{{ $rol->id }}" 
                                        checked disabled>
                                    <label for="{{ $rol->id }}">{{ $rol->name }}</label>
                                </li>
                            @empty
                                <span>Sin registros por mostrar</span>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="div-roles">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Medico</span>
                            <input type="email" name="medico" id="medico" class="form-control" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Medicos</span>
                            <select name="medicos" id="medicos" class="form-control" disabled>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        
@endsection