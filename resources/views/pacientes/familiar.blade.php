@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_familiar', $patient) }}

    <div class="card" style="margin-bottom: 4rem;">
    <div class="card-body">
        <h3>Datos del paciente</h3>
      
        <form id="editPaciente" action="" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card border-primary mb-3">
                <div class="card-header bg-transparent border-primary"><label style="font-weight: 600">Datos personales</label></div>
                <div class="card-body row">
                    <div class="col-md-3 col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombres</span>
                            <input type="text" name="pname" id="pname" class="form-control" 
                                placeholder="primer nombre" value="{{ old('pname', $patient->nombres) }}">
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