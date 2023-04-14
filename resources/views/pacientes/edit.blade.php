@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_edit', $patient) }}

    <div class="card" style="margin-bottom: 4rem;">
    <div class="card-body">
        <h3>Datos del paciente</h3>
        <label for="" class="mb-1">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>

        <form id="editPaciente" action="" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card border-primary mb-3">
                <div class="card-header bg-transparent border-primary"><label style="font-weight: 600">Datos personales</label></div>
                <div class="card-body row">
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Primer nombre &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="pname" id="pname" class="form-control" 
                                placeholder="primer nombre" value="{{ old('pname', $patient->primer_nombre) }}">
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Segundo nombre </span>
                            <input type="text" name="sname" id="sname" class="form-control" 
                                placeholder="segundo nombre" value="{{ old('sname', $patient->segundo_nombre) }}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Primer apellido &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="papellido" id="papellido" class="form-control" 
                                placeholder="primer apellido" value="{{ old('papellido', $patient->apellido_paterno) }}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Segundo apellido &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="sapellido" id="sapellido" class="form-control" 
                                placeholder="segundo apellido" value="{{ old('sapellido', $patient->apellido_materno) }}">
                        </div>
                    </div>

                    {{-- <div class="col-md-3 col-sm-3">
                        <div class="p-2">
                            <img src="{{ asset('patient-img/'.$patient->foto) }}" 
                            alt="foto paciente"
                            height="100"
                            width="250">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Foto</span>
                            <input type="file" name="foto" id="foto" class="form-control" 
                                value="{{ old('foto') }}" accept="image/*">
                        </div>
                    </div> --}}

                   
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tipo identificacion &nbsp; <span style="color: red">*</span> </span>
                                    <select name="type_ident" id="type_ident" class="form-control">
                                        <option value=""> --- Seleccione ---</option>
                                        @forelse ($type_identifications as $identification)
                                            <option value="{{ $identification->id }}" {{ $identification->id === $patient->type_identification_id ? 'selected' : '' }}>
                                                {{ $identification->descripcion }}
                                            </option>
                                        @empty
                                            <option value="">Sin registros por mostrar</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Identificacion &nbsp; <span style="color: red">*</span> </span>
                                    <input type="text" name="identification" id="identification" 
                                        class="form-control" placeholder="Ingrese Apellidos Nombres" 
                                        value="{{ old('identification', $patient->identificacion) }}">
                                    
                                </div>
                            </div>
            
                            <div class="col-md-3 col-sm-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Estado civil</span>
                                    <select name="estado_civil" id="estado_civil" class="form-control">
                                        <option value=""> --- Seleccione ---</option>
                                        @forelse ($marital_statuses as $status)
                                            <option value="{{ $status->id }}" {{ $status->id === $patient->marital_status_id ? 'selected':'' }}>
                                                {{ $status->descripcion }}
                                            </option>
                                        @empty
                                            <option value="">Sin registros por mostrar</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
        
                            <div class="col-md-3 col-sm-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Genero &nbsp; <span style="color: red">*</span> </span>
                                    <select name="genero" id="genero" class="form-control">
                                        <option value=""> --- Seleccione --- </option>
                                        <option value="F" {{ $patient->sexo === "Femenino" ? 'selected':'' }}>Femenino</option>
                                        <option value="M" {{ $patient->sexo === "Masculino" ? 'selected':'' }}>Masculino</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="col-md-4 col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tipo de seguro</span>
                                    <select name="seguro" id="seguro" class="form-control">
                                        <option value=""> --- Seleccione ---</option>
                                        @forelse ($insurances as $insurance)
                                            <option value="{{ $insurance->id }}" {{ $insurance->id === $patient->insurance_id ? 'selected':'' }}>
                                                {{ $insurance->descripcion }}
                                            </option>
                                        @empty
                                            <option value="">Sin registros por mostrar</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tipo de sangre &nbsp; <span style="color: red">*</span> </span>
                                    <select name="tipo_sangre" id="tipo_sangre" class="form-control">
                                        <option value=""> --- Seleccione ---</option>
                                        @forelse ($type_bloods as $blood)
                                            <option value="{{ $blood->id }}" {{ $blood->id === $patient->type_blood_id ? 'selected':'' }}>
                                                {{ $blood->descripcion }}
                                            </option>
                                        @empty
                                            <option value="">Sin registros por mostrar</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
            
                            <div class="col-md-4 col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Etnia</span>
                                    <select name="etnia" id="etnia" class="form-control">
                                        <option value=""> --- Seleccione ---</option>
                                        @forelse ($ethnicities as $ethnicity)
                                            <option value="{{ $ethnicity->id }}" {{ $ethnicity->id === $patient->ethnicity_id ? 'selected':'' }}>
                                                {{ $ethnicity->descripcion }}
                                            </option>
                                        @empty
                                            <option value="">Sin registros por mostrar</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Foto</span>
                                <input type="file" name="foto" id="foto" accept="image/*" 
                                class="form-control" placeholder="Seleccione Fotografía" value="{{ old('foto') }}">
                              
                            </div>
                        </div>
                   
    

                    
                </div>
            </div>

            <div class="card border-info mb-3">
                <div class="card-header bg-transparent border-info"><label style="font-weight: 600">Dirección de domicilio y numeros de contacto</label></div>
                <div class="card-body row">
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nacionalidad &nbsp; <span style="color: red">*</span> </span>
                            <select name="nacionalidad" id="nacionalidad" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($nationalities as $nationality)
                                    <option value="{{ $nationality->id }}" {{ $nationality->id === $patient->nationality_id ? 'selected':'' }}>
                                        {{ $nationality->descripcion }}
                                    </option>
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Provincias &nbsp; <span style="color: red">*</span> </span>
                            <select name="provincias" id="provincias" class="form-control">
                                <option value=""> --- Seleccione --- </option>
                                @forelse ($provinces as $province)
                                    <option value="{{ $province->id }}" {{ $province->id === $patient->province_id ? 'selected':'' }}>
                                        {{ $province->descripcion }}
                                    </option>
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Ciudades &nbsp; <span style="color: red">*</span> </span>
                            <select name="ciudades" id="ciudades" class="form-control" readonly>
                                <option value="{{ $patient->ciudad->id }}">{{ $patient->ciudad->descripcion ?? '-' }}</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Parroquias &nbsp; <span style="color: red">*</span> </span>
                            <select name="parroquias" id="parroquias" class="form-control" readonly>
                                <option value="{{ $patient->parroquia->id }}">{{ $patient->parroquia->descripcion ?? '-' }}</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Domicilio &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="direccion" id="direccion" 
                                class="form-control" placeholder="Ingrese la direccion" 
                                value="{{ old('direccion', $patient->direccion) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-map-location"></i>
                            </span>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Referencia domicilio &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="referencia" id="referencia" 
                                class="form-control" placeholder="Ingrese una referencia del domicilio" 
                                value="{{ old('referencia', $patient->referencia_domicilio) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-map"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Celular &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="celular" id="celular" 
                                class="form-control" placeholder="Ingrese el celular" 
                                value="{{ old('celular', $patient->celular) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-mobile"></i>
                            </span>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Telefono </span>
                            <input type="text" name="telf" id="telf" 
                                class="form-control" placeholder="Ingrese el telefono" 
                                value="{{ old('telf', $patient->telefono) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Telefono 2 </span>
                            <input type="text" name="telf2" id="telf2" 
                                class="form-control" placeholder="Ingrese el telefono" 
                                value="{{ old('telf2', $patient->telefono2) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text">Correo &nbsp; <span style="color: red">*</span></span>
                            <input type="email" name="mail" id="mail" 
                                class="form-control" placeholder="Ingrese el correo" aria-label="Correo" 
                                value="{{ old('mail', $patient->mail) }}">
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
                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Pais &nbsp; <span style="color: red">*</span> </span>
                            <select name="pais" id="pais" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $country->id === $patient->country_id ? 'selected':'' }}>
                                        {{ $country->name }}
                                    </option>
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Lugar nacimiento &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="nacimiento" id="nacimiento" 
                                class="form-control" placeholder="Ingrese el lugar de nacimiento" 
                                value="{{ old('nacimiento', $patient->lugar_nacimiento) }}">
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Fecha nacimiento &nbsp; <span style="color: red">*</span> </span>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" 
                                value="{{ date('Y-m-d', strtotime($patient->fecha_nacimiento)) }}">
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Tipo de discapacidad</span>
                            <select name="discapacidad" id="discapacidad" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($type_disabilities as $disability)
                                    <option value="{{ $disability->id }}" {{ $disability->id === $patient->type_disability_id ? 'selected':'' }}>>
                                        {{ $disability->descripcion }}
                                    </option>
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text">Llamar a</span>
                            <input type="text" name="llamar" id="llamar" 
                                class="form-control" placeholder="En caso de emergencia llamar a:" 
                                value="{{ old('llamar', $patient->llamar_a) }}">
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 ">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Parentesco</span>
                            <select name="kinship_id" id="kinship_id" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($kinships as $kinship)
                                   
                                    <option value="{{ $kinship->id }}" {{ $kinship->id === $patient->kinship_id ? 'selected':'' }}>
                                        {{ $kinship->description }}
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3">
                        <div class="input-group">
                            <span class="input-group-text">Telefono contacto</span>
                            <input type="text" name="telf_cont" id="telf_cont" 
                                class="form-control" placeholder="telefono" 
                                value="{{ old('telf_cont', $patient->telefono_contacto) }}">
                        </div>
                    </div>

                    
                    <div class="col-md-5 col-sm-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Dirección contacto</span>
                            <input type="text" name="dir_cont" id="dir_cont" 
                                class="form-control" placeholder="direccion" 
                                value="{{ old('dir_cont', $patient->direccion_contacto) }}">
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Educación</span>
                            <select name="educacion" id="educacion" class="form-control">
                                <option value=""> --- Seleccione ---</option>
                                @forelse ($educations as $education)
                                    <option value="{{ $education->id }}" {{ $education->id === $patient->education_formal_id ? 'selected':'' }}>
                                        {{ $education->descripcion }}
                                    </option>
                                @empty
                                    <option value="">Sin registros por mostrar</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-bottom: 1rem;">
                <div class="d-grid col-3 mx-auto mt-2">
                    <button type="submit" class="btn btn-success" onclick="pacienteUpdate()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar datos
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const provinces = document.querySelector('#provincias');
        const cities = document.querySelector('#ciudades');
        const parishes = document.querySelector('#parroquias');

        provinces.addEventListener('change', (event) => {
            let options = document.querySelectorAll('#ciudades option');
            options.forEach(o => o.remove());

            var options_parishes = document.querySelectorAll('#parroquias option');
            options_parishes.forEach(o => o.remove());

            var id = event.target.value;
            var data = {id:id};

            if (id) 
            {
                axios.post('/patients/cities/'+id, data)
                    .then(function (response) {
                        if (response.data.success) {
    
                            const cities_data = response.data.data;
                            cities.removeAttribute("readonly");

                            let option_empty = document.createElement('option');
                            option_empty.text = "--- seleccione ---";
                            option_empty.value = "";
                            cities.appendChild(option_empty);
    
                            for (let x of cities_data) {
                                const option = document.createElement('option');
                                option.text = x.descripcion;
                                option.value = x.id;
                                cities.appendChild(option);
                            }
                        } else {
    
                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error,
                                })
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error,
                        })
                    });
            }else{
                cities.setAttribute("readonly", true);
                parishes.setAttribute("readonly", true);
            }
        });

        cities.addEventListener('change', (event) => {
            let options = document.querySelectorAll('#parroquias option');
            options.forEach(o => o.remove());

            var id = event.target.value;
            var data = {id:id};

            if (id) 
            {
                axios.post('/patients/parishes/'+id, data)
                    .then(function (response) {
                        if (response.data.success) 
                        {
                            const parishes_data = response.data.data;
                            parishes.removeAttribute("readonly");
    
                            let option_empty = document.createElement('option');
                            option_empty.text = "--- seleccione ---";
                            option_empty.value = "";
                            parishes.appendChild(option_empty);

                            for (let x of parishes_data) {
                                const option = document.createElement('option');
                                option.text = x.descripcion;
                                option.value = x.id;
                                parishes.appendChild(option);
                            }
                        } else {
    
                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error,
                                })
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error,
                        })
                    });
            }else{
                parishes.setAttribute("readonly", true);
            }
        });
    });

    function pacienteUpdate()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#editPaciente');
        const form_data = new FormData(document.querySelector('#editPaciente'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/patients/{{ $patient->id }}', form_data)
                .then(function (response) {
                    if (response.data.success) {
                        let message_foto ;
                        if (response.data.data.hasOwnProperty("foto")) 
                        {
                            message_foto = response.data.data.foto;
                        } else {
                            message_foto = '';
                        }
                        Swal.fire({
                            icon: 'success',
                            title: response.data.message,
                            text: message_foto,
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

                        } else {

                            const article = document.createElement('article');
                            const list = document.createElement('ul');

                            list.setAttribute(
                                'style',
                                'list-style-type: none;',
                            );

                            const a_errors = response.data.errors;

                            for (const element in a_errors) {
                                if (a_errors.hasOwnProperty(element)) 
                                {    
                                    const item = document.createElement('li');
                                    item.setAttribute(
                                        'style',
                                        'padding-bottom: 5px;',
                                    );
                                    
                                    item.textContent = a_errors[element];
                                    list.appendChild(item);
                                }
                            }

                            Swal.fire(
                                response.data.message,
                                article.appendChild(list),
                                'warning'
                            )
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
        });
    }
</script>
@endsection