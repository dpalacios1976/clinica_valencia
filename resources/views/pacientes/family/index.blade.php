@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_date', $patient) }}

<div class="card border-success">
    <div class="card-body">
        <h3 class="mb-3">Agregar Conyuge</h3>

        <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>

        <form id="addCita" action="{{ route('patients.date.store') }}" method="post">
            @csrf
            <input type="hidden" name="paciente" id="paciente" value="{{ $patient->id }}">
            <div class="card-body row">
                <div class="col-md-5 col-sm-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Paciente </span>
                            <input type="text" name="pname" id="pname" class="form-control" readonly
                                placeholder="Paciente" value="{{ old('pname', $patient->nombres) }}">
                        </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Genero </span>
                        <select name="genero" id="genero" class="form-control" readonly> 
                            <option value=""> --- Seleccione --- </option>
                            <option value="F" {{ $patient->sexo === "Femenino" ? 'selected':'' }}>Femenino</option>
                            <option value="M" {{ $patient->sexo === "Masculino" ? 'selected':'' }}>Masculino</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha Nacimiento  </span>
                        <input type="text" name="pname" id="pname" class="form-control" readonly
                            placeholder="Fecha Nacimiento" value="{{ old('pname', $patient->fecha_nacimiento) }}">
                    </div>
                </div>

             
                <div class="col-md-2 col-sm-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text ">Edad  </span>
                        <input type="text" name="pname" id="pname" class="form-control text-center" readonly 
                            placeholder="Edad" value="{{ \Carbon\Carbon::parse($patient->fecha_nacimiento)->age }} ">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="div-roles">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Conyuge</span>
                            <input type="text" name="search" id="search" class="form-control" 
                                placeholder="Ingrese el apellido del Conyuge">
                            <button class="btn btn-outline-success" type="button" id="searchButton" onclick="searchDoctor()">
                                <i class="fa-solid fa-magnifying-glass"></i> Buscar
                            </button>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Conyuge</span>
                            <select name="conyuge" id="conyuge" class="form-control" readonly></select>
                        </div>
                    </div>
                </div>




            </div>

            <div class="row">
                <div class="d-grid col-3 mx-auto mt-1">
                    <button type="submit" class="btn btn-success" onclick="citaStore()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Guardar cita
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

<script>

function searchDoctor()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const searchButton = document.querySelector('#searchButton');
        const search = document.querySelector('#search');
        const medicos = document.querySelector('#conyuge');

        let options = document.querySelectorAll('#conyuge option');
        options.forEach(o => o.remove());

        var id = search.value;
        var data = {search:id};

        const form_data = new FormData();
        form_data.append('search', id);

        if (id) 
        {
            console.log('INGRESO INDEX' + form_data);
            //axios.post('/management/users/doctors', form_data)
            axios.post('/patients/parientes/conyuge',form_data)
                .then(function (response) {
                    if (response.data.success) {

                        const doctors = response.data.data;
                        medicos.removeAttribute("readonly");

                        let option_empty = document.createElement('option');
                        option_empty.text = "--- seleccione ---";
                        option_empty.value = "";
                        medicos.appendChild(option_empty);

                        for (let x of doctors) {
                            const option = document.createElement('option');
                            option.text = x.names;
                            option.value = x.id;
                            medicos.appendChild(option);
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
            medicos.setAttribute("readonly", true);
            Swal.fire({
                icon: 'info',
                title: 'Informacion',
                text: 'Ingrese al menos un apellido'
            })
        }
    }

</script>
@endsection
