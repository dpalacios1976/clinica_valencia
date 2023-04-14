@extends('templates.master')
@section('title', 'Parametros')
@section('title-module', 'Parametros')

@section('content')

{{ Breadcrumbs::render('establishment_show', $establishment) }}

<div class="card border-success">
    <div class="card-body">
        <h3 class="mb-3">Datos del establecimiento</h3>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Ruc </span>
                    <input type="text" name="ruc" id="ruc" class="form-control" 
                        placeholder="Ingrese el ruc" value="{{ old('ruc', $establishment->ruc) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-id-card"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Razon social </span>
                    <input type="text" name="razon_social" id="razon_social" class="form-control" 
                        placeholder="Ingrese razon social" value="{{ old('razon_social', $establishment->razon_social) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-hospital"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre comercial </span>
                    <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control" 
                        placeholder="Ingrese el nombre comercial" value="{{ old('nombre_comercial', $establishment->nombre_comercial) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-hospital"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección </span>
                    <input type="text" name="direccion" id="direccion" class="form-control" 
                        placeholder="Ingrese la direccion" value="{{ old('direccion', $establishment->direccion) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Contribuyente especial  </span>
                    <input type="text" name="cont_especial" id="cont_especial" class="form-control" 
                        placeholder="Ingrese contibuyente especial" value="{{ old('cont_especial', $establishment->contribuyente_especial) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">Contabilidad </span>
                    <div class="input-group-text">
                        <label class="form-check-label" for="inlineCheckbox1">
                            {{ $establishment->contabilidad === 1 ? 'SI' : 'NO' }}
                        </label>
                    </div>
                    <span class="input-group-text">
                        <i class="fa-solid fa-receipt"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">Ambiente produccion </span>
                    <div class="input-group-text">
                        <label class="form-check-label" for="inlineCheckbox1">
                            {{ $establishment->ambiente_produccion === 1 ? 'SI' : 'NO' }}
                        </label>
                    </div>
                    <span class="input-group-text">
                        <i class="fa-solid fa-desktop"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Firma electronica </span>
                    <input type="text" name="firma" id="firma" class="form-control" placeholder="Ingrese firma" value="{{ old('firma') }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-signature"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña </span>
                    <input type="password" name="password" id="password" class="form-control" 
                        placeholder="Ingrese la contraseña" value="{{ old('password') }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">logo</span>
                    <input type="file" name="logo" id="logo" class="form-control" value="{{ old('logo') }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-file-image"></i>
                    </span>
                </div>
            </div>                

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-2">
                    <span class="input-group-text" id="basic-addon1">Nivel</span>
                    <input type="text" name="level" class="form-control" value="{{ old('level', $establishment->level->descripcion) }}" disabled>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection