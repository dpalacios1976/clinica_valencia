@extends('templates.master')
@section('title', 'Medicos')
@section('title-module', 'Medicos')

@section('content')

{{ Breadcrumbs::render('doctor_show', $doctor) }}

<div class="card border-success">
    <div class="card-body">
        <h3 class="mb-3">Datos del medico</h3>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre completo &nbsp; <span style="color: red">*</span> </span>
                    <input type="text" name="fullname" id="fullname" class="form-control" 
                        placeholder="Ingrese Nombre y Apellido" value="{{ old('fullname', $doctor->names) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Cedula / Ruc &nbsp; <span style="color: red">*</span> </span>
                    <input type="text" name="cedula" id="cedula" class="form-control" 
                        placeholder="Ingrese la cedula" value="{{ old('cedula', $doctor->ruc) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-id-card"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección &nbsp; <span style="color: red">*</span> </span>
                    <input type="text" name="direccion" id="direccion" class="form-control" 
                        placeholder="Ingrese la direccion" value="{{ old('direccion', $doctor->address) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Codigo Senecyt &nbsp; <span style="color: red">*</span> </span>
                    <input type="text" name="code_senecyt" id="codde_senecyt" class="form-control" 
                        placeholder="Ingrese codigo senecyt" value="{{ old('code_senecyt', $doctor->senecyt_code) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-id-card"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Celular &nbsp; <span style="color: red">*</span> </span>
                    <input type="text" name="mobile" id="mobile" class="form-control" 
                        placeholder="Ingrese el celular" value="{{ old('mobile', $doctor->mobile) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-mobile"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Telefono </span>
                    <input type="text" name="telf" id="telf" class="form-control" 
                        placeholder="Ingrese el telefono" value="{{ old('telf', $doctor->mobile2) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Correo &nbsp; <span style="color: red">*</span></span>
                    <input type="email" name="mail" id="mail" class="form-control" 
                        placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('mail', $doctor->email) }}" disabled>
                    <span class="input-group-text">
                        <i class="fa-solid fa-at"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="div-roles">
                    <h5 for="">Especialidades</h5>
                    <ul class="list-roles">
                        @forelse ($doctor->specialties as $speciality)
                            <li>
                                <input type="checkbox" 
                                    name="specialities[]" 
                                    id="{{ $speciality->id }}" 
                                    value="{{ $speciality->id }}" 
                                    checked disabled>
                                <label for="{{ $speciality->id }}">{{ $speciality->name }}</label>
                            </li>
                        @empty
                            <span>Sin registros por mostrar</span>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection