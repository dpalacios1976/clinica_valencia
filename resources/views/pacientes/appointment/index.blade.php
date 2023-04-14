@extends('templates.master')
@section('title', 'Pacientes')
@section('title-module', 'Pacientes')

@section('content')

{{ Breadcrumbs::render('patients_date', $patient) }}

<div class="card border-success">
    <div class="card-body">
        <h3 class="mb-3">Registrar nueva cita</h3>

        <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>

        <form id="addCita" action="{{ route('patients.date.store') }}" method="post">
            @csrf
            <input type="hidden" name="paciente" id="paciente" value="{{ $patient->id }}">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Especialidades &nbsp; <span style="color: red">*</span></span>
                        <select name="speciality" id="speciality" class="form-control">
                            <option value=""> --- Seleccione ---</option>
                            @forelse ($specialities as $especialidad)
                                <option value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                            @empty
                                <option value=""> --- Seleccione ---</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">Medicos &nbsp; <span style="color: red">*</span></span>
                        <select name="doctor" id="doctor" class="form-control" readonly></select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha &nbsp; <span style="color: red">*</span> </span>
                        <input type="date" name="fecha" id="fecha" class="form-control" 
                            value="{{ date('Y-m-d') }}" 
                            min="{{ date('Y-m-d') }}" 
                            max="{{ date('Y-m-d', strtotime('+ 2 month')) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-calendar-day"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Horarios disponibles &nbsp; <span style="color: red">*</span> </span>
                        <select name="horarios" id="horarios" class="form-control" readonly></select>
                    </div>
                </div>

                <div class="col-md-8 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Motivo cita &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="motivo" id="motivo" class="form-control" 
                            placeholder="Ingrese el motivo de la cita" value="{{ old('motivo') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-file-pen"></i>
                        </span>
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
    document.addEventListener('DOMContentLoaded', function() {
        const espcialidades = document.querySelector('#speciality');
        const doctor = document.querySelector('#doctor');
        const fecha = document.querySelector('#fecha');
        const horarios = document.querySelector('#horarios');

        espcialidades.addEventListener('change', (event) => {
            var options = document.querySelectorAll('#doctor option');
            options.forEach(o => o.remove());

            var id = event.target.value;
            var data = {id:id};

            if (id) 
            {
                axios.post('/schedules/doctors/'+id, data)
                    .then(function (response) {
                        if (response.data.success) {
    
                            const doctors = response.data.data;
                            doctor.removeAttribute("readonly");
    
                            let option_empty = document.createElement('option');
                            option_empty.text = "--- seleccione ---";
                            option_empty.value = "";
                            doctor.appendChild(option_empty);
    
                            for (let x of doctors) {
                                const option = document.createElement('option');
                                option.text = x.names;
                                option.value = x.id;
                                doctor.appendChild(option);
                            }
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
                
            } else {
                doctor.setAttribute("readonly", true);
            }
        });

        fecha.addEventListener('change', (event) => {
            var options_horas = document.querySelectorAll('#horarios option');
            options_horas.forEach(o => o.remove());

            var id = event.target.value;
            var data = {
                fecha:id,
                doctor:doctor.value
            };

            if (id) 
            {
                axios.post('/patients/date/horas_disponibles', data)
                    .then(function (response) {
                        if (response.data.success) {
    
                            const horarios_data = response.data.data.horarios;
                            const morning = response.data.data.morning;
                            const afternoon = response.data.data.afternoon;

                            // console.log(horarios_data);
                            // console.log(morning);
                            // console.log(afternoon);

                            if (Object.entries(horarios_data).length !== 0) 
                            {
                                horarios.removeAttribute("readonly");
        
                                let option_empty = document.createElement('option');
                                option_empty.text = "--- seleccione ---";
                                option_empty.value = "";
                                horarios.appendChild(option_empty);
    
                                for (let i = 0; i < horarios_data.length; i++) {
                                    const element = horarios_data[i].start+' - '+horarios_data[i].end;
                                    const option = document.createElement('option');
                                    option.text = element;
                                    option.value = horarios_data[i].start;
                                    horarios.appendChild(option);
                                    // console.log(element);
                                }
                            } else {
                                horarios.removeAttribute("readonly");
        
                                let option_empty = document.createElement('option');
                                option_empty.text = "--- seleccione ---";
                                option_empty.value = "";
                                horarios.appendChild(option_empty);
    
                                for (let i = 0; i < morning.length; i++) {
                                    const element = morning[i].start+' - '+morning[i].end;
                                    const option = document.createElement('option');
                                    option.text = element;
                                    option.value = morning[i].start;
                                    horarios.appendChild(option);
                                }
                                for (let i = 0; i < afternoon.length; i++) {
                                    const element_afternoon = afternoon[i].start+' - '+afternoon[i].end;
                                    const option_afternoon = document.createElement('option');
                                    option_afternoon.text = element_afternoon;
                                    option_afternoon.value = afternoon[i].start;
                                    horarios.appendChild(option_afternoon);
                                }
                            }
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
            } else {
                horarios.setAttribute("readonly", true);
            }
        });

    });

    function citaStore()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#addCita');
        const form_data = new FormData(document.querySelector('#addCita'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/patients/date', form_data)
                .then(function (response) {
                    if (response.data.success) 
                    {
                        Swal.fire({
                            icon: 'success',
                            title: response.data.message,
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