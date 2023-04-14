@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_show', $patient) }}

<div class="card">
    <div class="card-body">
        <h3 class="mb-3">Datos del paciente</h3>
    
        <div class="card border-primary mb-3">
            <div class="card-header bg-transparent border-primary"><label style="font-weight: 600">Datos personales</label></div>
            <div class="card-body row">
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Primer nombre</span>
                        <input type="text" name="pname" id="pname" 
                            class="form-control" placeholder="primer nombre" 
                            value="{{ old('pname', $patient->primer_nombre) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Segundo nombre</span>
                        <input type="text" name="sname" id="sname" 
                            class="form-control" placeholder="segundo nombre" 
                            value="{{ old('sname', $patient->segundo_nombre) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Primer apellido</span>
                        <input type="text" name="papellido" id="papellido" 
                            class="form-control" placeholder="primer apellido" 
                            value="{{ old('papellido', $patient->apellido_paterno) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Segundo apellido</span>
                        <input type="text" name="sapellido" id="sapellido" 
                            class="form-control" placeholder="segundo apellido" 
                            value="{{ old('sapellido', $patient->apellido_materno) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tipo identificacion </span>
                        <input type="text" name="type_ident" id="type_ident" 
                            class="form-control" placeholder="tipo identificacion" 
                            value="{{ old('type_ident', $patient->tipo_documento->descripcion) }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Identificacion</span>
                        <input type="text" name="identification" id="identification" class="form-control" 
                            value="{{ old('identification', $patient->identificacion) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado civil</span>
                        <input type="text" name="estado_civil" id="estado_civil" class="form-control"  
                            value="{{ old('estado_civil', $patient->tipo_estado_civil->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Genero</span>
                        <input type="text" name="genero" id="genero" class="form-control" 
                            value="{{ old('genero', $patient->sexo) }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tipo de seguro</span>
                        <input type="text" name="seguro" id="seguro" class="form-control" 
                            value="{{ old('seguro', $patient->tipo_seguro->descripcion ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tipo de sangre</span>
                        <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" 
                            value="{{ old('tipo_sangre', $patient->tipo_sangre->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Etnia</span>
                        <input type="text" name="etnia" id="etnia" class="form-control" 
                            value="{{ old('etnia', $patient->etnia->descripcion ?? '-') }}" disabled>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-info mb-3">
            <div class="card-header bg-transparent border-info"><label style="font-weight: 600">Dirección de domicilio y numeros de contacto</label></div>
            <div class="card-body row">
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nacionalidad </span>
                        <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" 
                            value="{{ old('etnia', $patient->nacionalidad->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Provincia </span>
                        <input type="text" name="provincias" id="provincias" class="form-control" 
                            value="{{ old('provincias', $patient->provincia->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ciudade </span>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" 
                            value="{{ old('ciudad', $patient->ciudad->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Parroquia </span>
                        <input type="text" name="parroquia" id="parroquia" class="form-control" 
                            value="{{ old('parroquia', $patient->parroquia->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Domicilio </span>
                        <input type="text" name="direccion" id="direccion" class="form-control" 
                            value="{{ old('direccion', $patient->direccion) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-map-location"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Referencia domicilio </span>
                        <input type="text" name="referencia" id="referencia" class="form-control" 
                            value="{{ old('referencia', $patient->referencia_domicilio) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-map"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Celular </span>
                        <input type="text" name="celular" id="celular" class="form-control" 
                            value="{{ old('celular', $patient->celular) }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-mobile"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono </span>
                        <input type="text" name="telf" id="telf" class="form-control" 
                            value="{{ old('telf', $patient->telefono ?? ' - ') }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono 2 </span>
                        <input type="text" name="telf2" id="telf2" class="form-control" 
                            value="{{ old('telf2', $patient->telefono2 ?? ' - ') }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Correo</span>
                        <input type="email" name="mail" id="mail" class="form-control" 
                            aria-label="Correo" value="{{ old('mail', $patient->mail ?? ' - ') }}" disabled>
                        <span class="input-group-text">
                            <i class="fa-solid fa-at"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success"><label style="font-weight: 600">Lugar de nacimiento, en caso necesario llamar a, nivel de educación</label></div>
            <div class="card-body row">
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Pais </span>
                        <input type="text" name="pais" id="pais" class="form-control" 
                            value="{{ old('pais', $patient->pais->name ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Lugar nacimiento </span>
                        <input type="text" name="nacimiento" id="nacimiento" class="form-control" 
                            value="{{ old('nacimiento', $patient->lugar_nacimiento) }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha nacimiento </span>
                        <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" 
                        class="form-control" 
                        value="{{ old('fecha_nacimiento', \Carbon\Carbon::parse($patient->fecha_nacimiento)->format('d/m/Y')) }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tipo de discapacidad</span>
                        <input type="text" name="discapacidad" id="discapacidad" class="form-control" 
                            value="{{ old('discapacidad', $patient->discapacidad->descripcion ?? '-') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Llamar a</span>
                        <input type="text" name="llamar" id="llamar" class="form-control" 
                            value="{{ old('llamar', $patient->llamar ?? ' - ') }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono contacto</span>
                        <input type="text" name="telf_cont" id="telf_cont" class="form-control" 
                            value="{{ old('telf_cont', $patient->telefono_contacto ?? ' - ') }}" disabled>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección contacto</span>
                        <input type="text" name="dir_cont" id="dir_cont" class="form-control" 
                            value="{{ old('dir_cont', $patient->direccion_contacto ?? ' - ') }}" disabled>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Educación</span>
                        <input type="text" name="educacion" id="educacion" class="form-control" 
                            value="{{ old('educacion', $patient->educacion->descripcion ?? '-') }}" disabled>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection